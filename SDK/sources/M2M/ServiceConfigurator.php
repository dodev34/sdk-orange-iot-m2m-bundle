
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
 *  @desc Object containing all the necessary data for service connectivity
 *  @name  M2M_ServiceConfigurator
 *  @package M2M API
 *  @param M2M_ServiceConfigurator
 */
class M2M_ServiceConfigurator {
	
	/**
	 * @var $_oProxy
	 */
  protected $_oProxy;
  
	/**
	 * @var $_oSoapClient
	 * @desc The http proxy address
	 */
	protected $_oSoapClient;
		
	/**
	 * @var $_oCredentials
	 * @desc Contains the credentials for service connexion
	 */
	protected $_oCredentials;

		  
	/**
	 * @var $_sServiceCustomerAlarmUrlV2
	 */
	protected $_sServiceCustomerAlarmUrlV2;
		  		  
	/**
	 * @var $_sConnectivityDirectoryUrl
	 */
	protected $_sConnectivityDirectoryUrl;
		  
	/**
	 * @var $_sDeviceInfoUrl
	 */
	protected $_sDeviceInfoUrl;
		  
	/**
	 * @var $_sIncidentDiagnosticsUrlV2
	 */
	protected $_sIncidentDiagnosticsUrlV2;
		  
	/**
	 * @var $_sNetworkstatusUrl
	 */
	protected $_sNetworkstatusUrl;
		  
	/**
	 * @var $_sSessionHistoryUrlV2
	 */
	protected $_sSessionHistoryUrlV2;
		  
	/**
	 * @var $_sSimLifecycleManagementServiceUrl
	 */
	protected  $_sSimLifecycleManagementServiceUrl;	
		  
	/**
	 * @var $_sTrafficTrackingUrl
	 */
	protected $_sTrafficTrackingUrl;
		  		  		
 	/**
	 * @var $_sCertificate
	 */
	protected $_sCertificate;
	
	 	/**
	 * @var $_sIccidPrefix
	 */
	public $_sIccidPrefix;
		  

	/**
	 * Contructor
	 * @param string $propertyFile Path to the configuration file
	 * 
	 */
	public function __construct (M2M_IniParser $oIniM2m) {
	  
	// Proxy
	$this->_oProxy = new M2M_Proxy(
	$oIniM2m->getProperty("proxyHost"),
	$oIniM2m->getProperty("proxyPort"),
    $oIniM2m->getProperty("proxyUsername"),
    $oIniM2m->getProperty("proxyPassword")		  
	);
		
	// Credentials
	$this->_oCredentials = new M2M_Credentials();
	$this->_oCredentials->login    = $oIniM2m->getProperty("login");
	$this->_oCredentials->password = $oIniM2m->getProperty("password");

	//Iccid prefix
	$this->_sIccidPrefix = $oIniM2m->getProperty("iccidPrefix");
	
	//if it is not set in the configuration file, the program sets it 
	if (is_null($this->_sIccidPrefix)){
	$this->_sIccidPrefix="893301";
	}
	
	if ($this->_sIccidPrefix==""){
	$this->_sIccidPrefix="893301";
	}
	
	//Certificate
    //$this->_sCertificate = $oIniM2m->getProperty ( "useCertificate" );

		  
	$this->_sServiceCustomerAlarmUrlV2    = $oIniM2m->getProperty ( "ServiceCustomerAlarmUrl2" );	
  		  
    $this->_sConnectivityDirectoryUrl   = $oIniM2m->getProperty ( "connectivityDirectoryUrl" );
		  
	$this->_sDeviceInfoUrl 		= $oIniM2m->getProperty ( "deviceInfoUrl" );
		  
	$this->_sIncidentDiagnosticsUrlV2	= $oIniM2m->getProperty ( "IncidentDiagnosticsUrl2" );
		  
	$this->_sNetworkStatusUrl    		= $oIniM2m->getProperty ( "networkStatusUrl" );
		  
	$this->_sSessionHistoryUrlV2		= $oIniM2m->getProperty ( "sessionHistoryUrl2" );
		  
    $this->_sSimLifecycleManagementUrl  = $oIniM2m->getProperty ( "simLifecycleManagementUrl" );
		  
	$this->_sTrafficTrackingUrl 		= $oIniM2m->getProperty ( "TrafficTrackingUrl" );
		  		  		
	}
	

 /**
   * Callback for unknown methods
   * @param $method
   * @param $args
   * @return unknown_type
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

		  
