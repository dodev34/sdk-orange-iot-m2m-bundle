
<?php
/*
 *
 * Copyright 2009 France Telecom SA Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the License.
 */


if ( ! require_once(dirname(__FILE__)."/InitializationException.php") ) {
  throw new Exception ( "Cannot find Initialization Exception file." );
}

/**
 *  @desc Initialization class set includes, setTimeZone, start AutoLoad
 *  @name  Initialization
 *  @package M2M API
 *  @param M2M_ServiceConfigurator
 */

class Initialization {
  
  /**
   *  @desc SetIncludePath
   */
  public static function SetIncludePath() {
    $sZfPath  = realpath ( dirname ( __FILE__ ) . "/../common/External/ZendFramework-1.9.3PL1/library" );
    $sM2mPath = realpath ( dirname ( __FILE__ ) . "/.." );
    set_include_path ( get_include_path () . PATH_SEPARATOR . $sZfPath . PATH_SEPARATOR . $sM2mPath );
  } 
  
  /**
   *  @desc SetTimeZone
   */
  public static function SetTimeZone() {
    date_default_timezone_set ( "Europe/Paris" );
  }
  
  /**
   *  @desc StartAutoLoader
   */
  public static function StartAutoLoader() {
    if ( ! require_once ("Zend/Loader/Autoloader.php") ) {
      throw new InitializationException ( "Cannot find Autoloader.php" );
    }
    
    $zend_autoloader = Zend_Loader_Autoloader::getInstance ();
    $zend_autoloader->registerNamespace ( 'M2M_' );
   
  }
  
  /**
   *  @desc SetManualIncludes
   */
  public static function SetManualIncludes() { 
                
 	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/customerAlarm_V2_15.wsdl.php";
		  
    $aFilePaths [] = dirname ( __FILE__ ) . "/stubs/ConnectivityDirectory_V1_13.wsdl.php";
		  
	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/deviceInfoV1_2.wsdl.php";
		  
 	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/IncidentDiagnostics_V2_3.wsdl.php";
		  
 	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/Networkstatus_V1_6.wsdl.php";
		  
 	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/SessionHistory_V2_1.wsdl.php";
		  
 	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/SimLifecycleManagement_V1_4.wsdl.php";
		  
	$aFilePaths [] = dirname ( __FILE__ ) . "/stubs/TrafficTracking_V1_2.wsdl.php";
		  		  
 	
    foreach ( $aFilePaths as $sFilePath ) {
      if ( ! require_once ($sFilePath) ) {
        throw new InitializationException ( "Cannot find $sFilePath (in " . __FILE__ . ")." );
      }
    }  
  }
  
  /**
   *  @desc StartLogger
   */
  public static function StartLogger() {
    
    $log = new Zend_Log ( );
    
    // Formatting
    $defaultFormat = Zend_Log_Formatter_Simple::DEFAULT_FORMAT;
    $format = $defaultFormat . '%client_ip% %user_agent%' . PHP_EOL;
    
    $path = dirname ( __FILE__ ) . "/../logs/events.log";
    if ( file_exists ( dirname ( $path ) ) ) {
      $writer = new M2M_FileStream ( $path );
      $writer->setFormatter ( new Zend_Log_Formatter_Simple ( $format ) );
      $log->addWriter ( $writer );
    }
    else throw new InitializationException ( "Cannot find $path (in " . __FILE__ . ")." );
    
    // Adding parameters to log: IP and browser
    if ( array_key_exists ( 'HTTP_USER_AGENT', $_SERVER ) ) {
      $log->setEventitem ( 'user_agent', $_SERVER ['HTTP_USER_AGENT'] );
    }
    if ( array_key_exists ( 'REMOTE_ADDR', $_SERVER ) ) {
      $log->setEventitem ( 'client_ip', $_SERVER ['REMOTE_ADDR'] );
    }
    
    Zend_Registry::set ( 'log', $log );

  }
  
  /**
   * 
   * @desc CheckExtensions : When using SoapClient with client certificates (the 'local_cert' and 'passphrase' options), PHP needs to have CURL enabled. (At least with PHP 5 and Apache on Windows)
   * 
   */
  public static function CheckExtensions() {
    $aPhpExtensions = array ("openssl" => "Open SSL", "soap" => "SOAP", "curl" => "cURL" );
    
    foreach ( $aPhpExtensions as $sExtensionName => $sShortDescription ) {
      if ( ! extension_loaded ( $sExtensionName ) ) {
        throw new InitializationException ( "$sShortDescription extension is required. Please modify your php.ini to load the $sExtensionName extension." );
      }
    }
  }
}


Initialization::SetIncludePath();
Initialization::SetTimeZone();
Initialization::StartAutoLoader();
Initialization::SetManualIncludes();
Initialization::StartLogger();
Initialization::CheckExtensions();

?>

