		

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
 *  @desc Client proxy for the service NetworkStatus
 *  @name  M2M_NetworkStatusClient
 *  @package M2M API
 *  @param M2M_ServiceConfigurator
 */
class M2M_NetworkStatusClient extends M2M_M2mClient {
	/**
	 * @var array of string
	 * mapping class/xml_entity
	 */
	private $_aClassMap = array(
    "getNetworkStatus" => "getNetworkStatus",
    "Coordinates" => "Coordinates",
    "getNetworkStatusResponse" => "getNetworkStatusResponse",
    "AreaCoverage" => "AreaCoverage",
    "BreakdownReport" => "BreakdownReport",
    "ForecastCoverage" => "ForecastCoverage");
	
	/**
	 * @desc constructor
	 * @param ServiceConfig $service
	 * @return unknown_type
	 */
 	public function __construct(M2M_ServiceConfigurator $oService) {
		parent::__construct($oService, $oService->get_sNetworkStatusUrl(), dirname(__FILE__) . "/resources/Networkstatus_V1_6.wsdl", $this->_aClassMap );
	}
	
	/**
	 * @param $input
	 * @return getNetworkStatusResponse
	 */	
	public function call_getNetworkStatus($input) {
	    try {
	      // call the operation
	      $oResponse = $this->_oSoapClient->getNetworkStatus($input);
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
		  	
