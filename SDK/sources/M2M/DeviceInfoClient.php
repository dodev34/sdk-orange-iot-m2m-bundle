		
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
 *  @desc Client proxy for the service DeviceInfo
 *  @name  M2M_DeviceInfoClient
 *  @package M2M API
 *  @param M2M_ServiceConfigurator
 */

class M2M_DeviceInfoClient extends M2M_M2mClient {
  
  /**
   * @var array of string
   * mapping class/xml_entity
   */
  private $_aClassMap = array(
    "submitSimSup" => "submitSimSup",
    "LineIdentifierCollection" => "LineIdentifierCollection",
    "Msisdn" => "Msisdn",
    "submitSimSupResponse" => "submitSimSupResponse",
    "ValidationError" => "ValidationError",
    "Error" => "Error",
    "submitSimSupLoc" => "submitSimSupLoc",
    "submitSimSupLocResponse" => "submitSimSupLocResponse",
    "getSimReport" => "getSimReport",
    "getSimReportResponse" => "getSimReportResponse",
    "Line" => "Line",
    "LineIdentifier" => "LineIdentifier",
    "Supervision" => "Supervision",
    "SignalQuality" => "SignalQuality",
    "SignalStrength" => "SignalStrength",
    "Identity" => "Identity",
    "LastKnownIdentity" => "LastKnownIdentity",
    "Geolocation" => "Geolocation",
    "CellId" => "CellId",
    "GeographicPosition" => "GeographicPosition",
    "Accuracy" => "Accuracy",
    "getStatistics" => "getStatistics",
    "Period" => "Period",
    "getStatisticsResponse" => "getStatisticsResponse",
    "PeriodValidationError" => "PeriodValidationError",
    "PeriodCollection" => "PeriodCollection",
    "PeriodReport" => "PeriodReport",
    "Statistics" => "Statistics");
	

  /**
   * 
   * @param M2M_ServiceConfigurator $oService
   */
 	public function __construct(M2M_ServiceConfigurator $oService) {
		parent::__construct($oService, $oService->get_sDeviceInfoUrl(), dirname(__FILE__) . "/resources/deviceInfoV1_2.wsdl" , $this->_aClassMap );
    }
  
  /**
   * 	
   * @param ServiceConfig $oInput
   * @return submitSimSupResponse
   * 
   */
  public function call_submitSimSup($oInput) {
    
    try {
	    // call the operation
	    $oResponse = $this->_oSoapClient->submitSimSup ( $oInput );
    }
    catch ( Exception $e ) {
		parent::logRequest ("A problem occured while calling " . __METHOD__);
		parent::logResponse (" Last Response (warning: may not be the response you expected if the request failed before reaching the endpoint)." . __METHOD__ );      
		throw $e;
    }    
    
    // Log SOAP exchanges
    parent::logSuccessfullExchange();
        
    return $oResponse;
  }
  
  
  /**
   *
   * @param ServiceConfig $oInput
   * @return submitSimSupLocResponse
   *
   */
  public function call_submitSimSupLoc($oInput) {
  
  	try {
  		// call the operation
  		$oResponse = $this->_oSoapClient->submitSimSupLoc ( $oInput );
  	}
  	catch ( Exception $e ) {
  		parent::logRequest ("A problem occured while calling " . __METHOD__);
  		parent::logResponse (" Last Response (warning: may not be the response you expected if the request failed before reaching the endpoint)." . __METHOD__ );
  		throw $e;
  	}
  
  	// Log SOAP exchanges
  	parent::logSuccessfullExchange();
  
  	return $oResponse;
  }
  
  /**
   * 
   * @param ServiceConfig $oInput
   * @return getSimReportResponse  
   */  
  public function call_getSimReport($oInput) {
    
    try {
      // call the operation
      $oResponse = $this->_oSoapClient->getSimReport ( $oInput );
    } 
    catch ( Exception $e ) {
      parent::logRequest ( "A problem occured while calling " . __METHOD__);
      parent::logResponse (" Last Response (warning: may not be the response you expected if the request \"failed before reaching the endpoint\")." . __METHOD__ );
      throw $e;
    }   
    
    // Log SOAP exchanges    
    parent::logSuccessfullExchange();
    
    return $oResponse;
  }
  
  /**
   * @param ServiceConfig $oInput
   * @return getStatisticsResponse  
   */
  public function call_getStatistics($oInput) {
    
    try {
      // call the operation
      $oResponse = $this->_oSoapClient->getStatistics ( $oInput );
    }
    catch ( Exception $e ) {
      parent::logRequest ( "A problem occured while calling " . __METHOD__);
      parent::logResponse (" Last Response (warning: may not be the response you expected if the request \"failed before reaching the endpoint\")." . __METHOD__ );      
      throw $e;
    }       
    
    // Log SOAP exchanges
    parent::logSuccessfullExchange();
    
    return $oResponse;
  }
}

?>

        
		  	
