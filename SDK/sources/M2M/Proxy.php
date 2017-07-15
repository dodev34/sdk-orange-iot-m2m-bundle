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
 *  @desc Proxy class
 *  @name  M2M_Proxy
 *  @package M2M API
 *
 */

class M2M_Proxy {
  
  /**
   * Store the host
   * @var $_sHost
   */
  protected $_sHost;
  
  /**
   * Store the port
   * @var $_sPort
   */
  protected $_sPort;
  
  /**
   * Store the username
   * @var $_sUsername
   */
  protected $_sUsername;
  
  /**
   * Store the password
   * @var $_sPassword
   */
  protected $_sPassword;
  
  /**
   * Initializes a new instance of Proxy.
   * @param $sHost
   * @param $sPort
   * @param $sUsername
   * @param $sPassword
   * 
   */
  public function __construct($sHost = "", $sPort = "", $sUsername="", $sPassword="") {
    $this->_sHost = $sHost;
    $this->_sPort = $sPort;
    $this->_sUsername = $sUsername;
    $this->_sPassword = $sPassword;
  }
  
  /**
   * @desc __toString
   * @return Returns a string that represents the current instance.
   */
  public function __toString() {
    $result = "";
    $result .= "<BR><B> Class name: " . get_class ( $this ) . "</B><BR>";
    if ( isset ( $this->_sHost ) )
      $result .= "\n <BR> Value of host: " . $this->_sHost;
    if ( isset ( $this->_sPort ) )
      $result .= "\n <BR> Value of port: " . $this->_sPort;
    if ( isset ( $this->_sUsername ) )
      $result .= "\n <BR> Value of username: " . $this->_sUsername;
    if ( isset ( $this->_sPassword ) )
      $result .= "\n <BR> Value of password: " . $this->_sPassword;
    return $result;
  }
  
  /**
   * Callback for unknown methods
   * @param $method
   * @param $args
   * 
   */
  public function __call($method, $args) {
    if ( property_exists ( $this, $attr = substr ( $method, 3 ) ) ) {
      if ( substr ( $method, 0, 3 ) == 'set' ) {
        return $this->$attr = $args [0];
      }
      if ( substr ( $method, 0, 3 ) == 'get' ) {
        return $this->$attr;
      }
    }
    throw new M2M_ProxyException ( "Method $method not found in " . __FILE__ . "." );
  }
}

