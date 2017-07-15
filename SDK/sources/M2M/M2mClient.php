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
 *  @desc Global Abstract Class
 *  @name  M2M_M2mClient
 *  @package M2M API
 *  @param M2M_ServiceConfigurator
 */
abstract class M2M_M2mClient {

  /**
   * @var ServiceConfig
   * The service configuration
   */
  protected $_oServiceConfig;
  
  /**
   * @var Zend SOAP Client 
   * 
   */
  protected $_oSoapClient;
  
  /**
   * For logging
   */
  const STARS = "***************************";
  
  /**
   * @desc Constructor
   * @param $oService
   * @param $sEndPointUrl
   * @param $aClassMap
   * 
   */
  public function __construct(M2M_ServiceConfigurator $oService, $sEndPointUrl, $sWsdlPath, array $aClassMap) {
  
    if($sEndPointUrl === "") {
      throw new M2M_M2mClientException("End point URL is empty. Aborting.");
    }
    if($sWsdlPath === "") {
      throw new M2M_M2mClientException("Wsdl Path is empty. Aborting.");
    }    
    
    $this->_oServiceConfig = $oService;
   
	    $this->_oSoapClient = new Zend_Soap_Client ($sWsdlPath, array (
	    'proxy_host'     => $this->_oServiceConfig->get_oProxy()->get_sHost(), 
	    'proxy_port'     => $this->_oServiceConfig->get_oProxy()->get_sPort(),
	    'proxy_login'    => $this->_oServiceConfig->get_oProxy()->get_sUsername(),    
	    'proxy_password' => $this->_oServiceConfig->get_oProxy()->get_sPassword(),    
	    'soapVersion'    => SOAP_1_1,
	    //'use'            => SOAP_ENCODED,
		'login'			 =>$this->_oServiceConfig->get_oCredentials()->login,
		'password'		 =>$this->_oServiceConfig->get_oCredentials()->password,
	    'classMap'       => $aClassMap)
	    );

    $this->_oSoapClient->setLocation($sEndPointUrl);
   	$this->_oSoapClient->setSoapFeatures(SOAP_SINGLE_ELEMENT_ARRAYS);

    $oLogger = Zend_Registry::get( 'log' );
    $oLogger->info("SOAP Client is ready to send / receive requests / responses. \n");
    // In WSDL mode only, "getFunction" is available.  
	$oLogger->info("Available WS functions: " . print_r($this->_oSoapClient->getFunctions(),true) ."\n");
  }
  
  /**
   * @desc logSuccessfullExchange
   * 
   */
  final public function logSuccessfullExchange() {
    $this->logRequest("Success");
    $this->logResponse("Success");
  }
  
  
  /**
   * @desc logRequest
   * 
   */
  final public function logRequest($sAdditionalMessage = "") {
    // Log the request
    $oLogger = Zend_Registry::get( 'log' );
    if($sAdditionalMessage != "") {
      $oLogger->debug("$sAdditionalMessage \n");    
    }

    $aOptions = $this->_oSoapClient->getOptions();
    if(!isset($aOptions["style"])) {
      $aOptions["style"] = "";
    }
    if(!isset($aOptions["use"])) {
      $aOptions["use"] = "";
    }    
    $oLogger->debug(PHP_EOL . self::STARS . "SOAP request HTTP header: " . $this->_oSoapClient->getLastRequestHeaders() . "\n");   
    $oLogger->debug(PHP_EOL . self::STARS . "SOAP request HTTP body: "   . $this->_oSoapClient->getLastRequest()        . ". --- Using style " . $aOptions["style"] . " and using use " . $aOptions["use"] . "  \n");
  }
  
 /**
   * @desc logResponse 
   * 
   */
  final public function logResponse($sAdditionalMessage = "") {
    // Log the response
    $oLogger = Zend_Registry::get( 'log' );
    if ( $sAdditionalMessage != "" ) {
      $oLogger->debug ( "$sAdditionalMessage \n" );
    }

    $oLogger->debug(PHP_EOL . self::STARS . "SOAP response HTTP header: " . $this->_oSoapClient->getLastResponseHeaders() . "\n");   
    $oLogger->debug(PHP_EOL . self::STARS . "SOAP response HTTP body: "   . $this->_oSoapClient->getLastResponse()        . "\n");    
  }  
}

