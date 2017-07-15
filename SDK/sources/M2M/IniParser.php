<?php
/*
 *
 * Copyright 2009 France Telecom SA Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the License.
 */

 /**
 *  @desc Parses m2m.ini file to extract datas
 *  @name  M2M_IniParser
 *  @package M2M API
 *  
 */
class M2M_IniParser {

  protected $content         = null;    // Content of the ini file
  protected $ini_path        = null;
  protected $check_obsoletes = true;
  protected $check_alloweds  = true;
  private static $obsoletes  = array();  // "obsolete" => "new" or (empty if removed)
  private static $alloweds   = array("proxyHost", "proxyPort", "proxyUsername", "proxyPassword", "login", "password", "connectivityDirectoryUrl", "simLifecycleManagementUrl", "subscriptionStatusUrl","sessionHistoryUrl2","ServiceCustomerAlarmUrl2","TrafficTrackingUrl", "DisableLogger", "deviceInfoUrl", "iccidPrefix","ServiceCustomerAlarmUrl", "IncidentDiagnosticsUrl2", "networkStatusUrl");
  private static $optionals  = array("proxyHost", "proxyPort", "proxyUsername", "proxyPassword", "connectivityDirectoryUrl", "simLifecycleManagementUrl", "subscriptionStatusUrl","sessionHistoryUrl", "deviceInfoUrl", "iccidPrefix","ServiceCustomerAlarmUrl", "IncidentDiagnosticsUrl2", "networkStatusUrl");

  
  
  /**
   * AddAllowed
   * @param $name
   * @return unknown_type
   */
  public static function AddAllowed($name) {
    self::$alloweds[] = $name;
  }
  
  /**
   * AddOptional
   * @param $name
   * @return unknown_type
   */
  public static function AddOptional($name) {
    self::$optionals[] = $name;
  }  

  /**
   * Constructor.
   * @param $sIniPath
   * @param $bCheckAlloweds
   * @param $bCheckObsoletes
   * @return unknown_type
   */
  public function __construct($sIniPath = "", $bCheckAlloweds = true, $bCheckObsoletes = true) {

    if($sIniPath === "") {
      $sIniPath = dirname(__FILE__) . "/m2m.ini";  // Default file location
    }    
            
    $this->check_obsoletes = $bCheckObsoletes;
    $this->check_alloweds  = $bCheckAlloweds;
    
    $sRealIniPath = realpath($sIniPath); // Returns real path or false if file does not exist
        
    if ( $sRealIniPath != false ) {
      $this->ini_path = $sRealIniPath;
      $this->content = parse_ini_file($sRealIniPath,true);
      if ( $this->content === false ) {
        throw new M2M_IniParserException ( "Could not parse ini file at path: \"$sRealIniPath\". (parse_ini_file error). Are values surrounded by double-quotes? Do you use ; for line comments?" );
      }
    }
    else {
     throw new M2M_IniParserException("Path to ini file does not exist. Given path: \"$sIniPath\""); 
    }
    
    
    // Disable logging
    if($this->getProperty("DisableLogger") === "yes" || $this->getProperty("DisableLogger") == "1") { // In ini file, yes is translated to 1
      $oNulWriter = new Zend_Log_Writer_Null;
      $oLogger = new Zend_Log($oNulWriter);
      Zend_Registry::set( 'log', $oLogger );
    }
  	
  }

  /**
   * in_array_case_insensitive
   */
  private static function in_array_case_insensitive($needle, $haystack) {
    if ( ! is_array ( $haystack ) ) {
      throw new M2M_IniParserException ( "Expected haystack to be an array." );
    }
    return in_array ( strtolower ( $needle ), array_map ( 'strtolower', $haystack ) );
  }
  
  /**
   * array_search_case_insensitive
   */
  private static function array_key_exists_case_insensitive($needle, $haystack) {
    if ( ! is_array ( $haystack ) ) {
      throw new M2M_IniParserException ( "Expected haystack to be an array." );
    }
    return array_key_exists ( strtolower ( $needle ), array_map ( 'strtolower', $haystack ) );
  }

  /**
   * getProperty
   * If section is empty, look at document root
   * @throws M2M_IniParserException
   */
  public function getProperty($propertyname, $section = "") {

    if(!isset($propertyname) || $propertyname==="") {
      throw new M2M_IniParserException("Invalid Property Name.");
    }

    $alloweds_string  = "";
    $alloweds_string .= implode(",",self::$alloweds);

    if($this->check_obsoletes) {   // Throw exception if property name is an obsolete one
      if(self::array_key_exists_case_insensitive($propertyname,self::$obsoletes)) {
        $message = "";
        if(array_key_exists($propertyname,self::$obsoletes)!==false ) {  // Case sensitive
          if(self::$obsoletes[$propertyname]!="") {
            $message .= " Please replace $propertyname by " . self::$obsoletes[$propertyname] . " in your property file.";
          }
          elseif(self::$obsoletes[$propertyname]==="") {
            $message .= " Please remove $propertyname in your property file. This parameter is no longer needed";
          }
        }
        else {
          $message .= " Please replace $propertyname by case-sensitive equivalent in your property file.";
        }
        throw new M2M_IniParserException("Found an obsolete key ($propertyname) in the properties file.\n<BR>$message. List of allowed parameters: $alloweds_string");
      }
    }

    if($this->check_alloweds) {   // Throw exception if property name is not known
      if(self::in_array_case_insensitive($propertyname,self::$alloweds) && !in_array($propertyname,self::$alloweds) ) {
        throw new M2M_IniParserException("Found a case problem key name: $propertyname should be written xxx or xxxYyyy. List of allowed parameters: $alloweds_string");
      }
      elseif(!in_array($propertyname,self::$alloweds)) {
        throw new M2M_IniParserException("Unknown key name: $propertyname. List of allowed parameters: $alloweds_string");
      }
    }

    if($section==="") { // Root element
      if(array_key_exists($propertyname,$this->content)) {
        return $this->content[$propertyname];
      }
      else {
        if ( ! in_array ( $propertyname, self::$optionals ) ) {
          throw new M2M_IniParserException ( "Cannot find \"$propertyname\" in root of file \"$this->ini_path\". Content of file: " . print_r ( $this->content, true ) );
        }
        else return "";
      }
    }
    else {
      if(array_key_exists($section,$this->content)) {
        $section_content = $this->content[$section];
        if(array_key_exists($propertyname,$section_content)) {
          return $section_content[$propertyname];
        }
        else {
          throw new M2M_IniParserException ( "Cannot find \"$propertyname\" in section $section of file \"$this->ini_path\"." );
        }
      }
      else {
        throw new M2M_IniParserException ( "Cannot find \"$section\" section in file \"$this->ini_path\". Content of file: " . print_r ( $this->content, true ) );
      }
    }
  }
}


