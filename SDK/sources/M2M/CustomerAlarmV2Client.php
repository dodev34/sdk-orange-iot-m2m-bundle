		




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
 *  @desc Client proxy for the service CustomerAlarmV2
 *  @name  M2M_CustomerAlarmV2Client
 *  @package M2M API
 *  @param M2M_ServiceConfigurator
 */

class M2M_CustomerAlarmV2Client extends M2M_M2mClient {
  
  /**
   * @var array of string
   * mapping class/xml_entity
   */
  private $_aClassMap = array(
    "createTrigger" => "createTrigger",
    "Scope" => "Scope",
    "LineIdentifier" => "LineIdentifier",
    "Msisdn" => "Msisdn",
    "TriggerCriteria" => "TriggerCriteria",
    "TrafficTimeStampCriteria" => "TrafficTimeStampCriteria",
    "TwoPeriods" => "TwoPeriods",
    "Period" => "Period",
    "AllowedPeriods" => "AllowedPeriods",
    "TrafficLocationCriteria" => "TrafficLocationCriteria",
    "AllowedCountriesAndOperators" => "AllowedCountriesAndOperators",
    "Country" => "Country",
    "Operators" => "Operators",
    "TrafficGlobalThresholdCriteria" => "TrafficGlobalThresholdCriteria",
    "Roaming" => "Roaming",
    "TrafficRestriction" => "TrafficRestriction",
    "Local" => "Local",
    "AllOrigin" => "AllOrigin",
    "TrafficUnitaryThresholdCriteria" => "TrafficUnitaryThresholdCriteria",
    "TrafficBearerCriteria" => "TrafficBearerCriteria",
    "AllowedBearers" => "AllowedBearers",
    "UpdateImeiCriteria" => "UpdateImeiCriteria",
    "TrafficLazyMachineCriteria" => "TrafficLazyMachineCriteria",
    "TrafficSilentMachineCriteria" => "TrafficSilentMachineCriteria",
    "TrafficCrazyMachineCriteria" => "TrafficCrazyMachineCriteria",
    "SubscriptionStatusChangeCriteria" => "SubscriptionStatusChangeCriteria",
    "WatchedM2MSubscriptionStatuses" => "WatchedM2MSubscriptionStatuses",
    "SubscriptionOptionChangeCriteria" => "SubscriptionOptionChangeCriteria",
    "WatchedSubscriptionOptions" => "WatchedSubscriptionOptions",
    "OptionChangeTypes" => "OptionChangeTypes",
    "createTriggerResponse" => "createTriggerResponse",
    "deleteTrigger" => "deleteTrigger",
    "deleteTriggerResponse" => "deleteTriggerResponse",
    "updateTrigger" => "updateTrigger",
    "updateTriggerResponse" => "updateTriggerResponse",
    "listTriggers" => "listTriggers",
    "TriggerIdentifiers" => "TriggerIdentifiers",
    "LineIdentifierCollection" => "LineIdentifierCollection",
    "listTriggersResponse" => "listTriggersResponse",
    "Triggers" => "Triggers",
    "Trigger" => "Trigger",
    "TriggerScope" => "TriggerScope",
    "UnknownTriggers" => "UnknownTriggers",
    "getAlarms" => "getAlarms",
    "AlarmIdentifiers" => "AlarmIdentifiers",
    "getAlarmsResponse" => "getAlarmsResponse",
    "Alarms" => "Alarms",
    "Alarm" => "Alarm",
    "NbAlarmExceeded" => "NbAlarmExceeded",
    "TriggeredAlarm" => "TriggeredAlarm",
    "AlarmTriggerCriteria" => "AlarmTriggerCriteria",
    "AlarmTrafficTimeStampCriteria" => "AlarmTrafficTimeStampCriteria",
    "AlarmTrafficLocationCriteria" => "AlarmTrafficLocationCriteria",
    "ForbiddenCountriesAndOperators" => "ForbiddenCountriesAndOperators",
    "AlarmTrafficUnitaryThresholdCriteria" => "AlarmTrafficUnitaryThresholdCriteria",
    "AlarmTrafficGlobalThresholdCriteria" => "AlarmTrafficGlobalThresholdCriteria",
    "AlarmTrafficBearerCriteria" => "AlarmTrafficBearerCriteria",
    "ForbiddenBearerTypes" => "ForbiddenBearerTypes",
    "AllowedBearerTypes" => "AllowedBearerTypes",
    "AlarmUpdateImeiCriteria" => "AlarmUpdateImeiCriteria",
    "AlarmTrafficLazyMachineCriteria" => "AlarmTrafficLazyMachineCriteria",
    "AlarmTrafficSilentMachineCriteria" => "AlarmTrafficSilentMachineCriteria",
    "AlarmTrafficCrazyMachineCriteria" => "AlarmTrafficCrazyMachineCriteria",
    "AlarmSubscriptionStatusChangeCriteria" => "AlarmSubscriptionStatusChangeCriteria",
    "AlarmSubscriptionOptionChangeCriteria" => "AlarmSubscriptionOptionChangeCriteria",
    "UnknownAlarmIdentifiers" => "UnknownAlarmIdentifiers",
    "searchAlarms" => "searchAlarms",
    "SearchAlarmsByTargets" => "SearchAlarmsByTargets",
    "SearchAlarmsByTriggers" => "SearchAlarmsByTriggers",
    "searchAlarmsResponse" => "searchAlarmsResponse",
    "manageAlarms" => "manageAlarms",
    "AlarmInformations" => "AlarmInformations",
    "AlarmInformation" => "AlarmInformation",
    "manageAlarmsResponse" => "manageAlarmsResponse");

  /**
   * 
   * @param M2M_ServiceConfigurator $oService
   */
 	public function __construct(M2M_ServiceConfigurator $oService) {
		parent::__construct($oService, $oService->get_sServiceCustomerAlarmUrlV2(), dirname(__FILE__) . "/resources/customerAlarm_V2_15.wsdl" , $this->_aClassMap );
    }
  
  /**
   * @desc getAlarms call
   * @param ServiceConfig $oInput
   * @return getServiceCustomerAlarmResponse
   * 
   */
  public function call_getAlarms($oInput) {
    
    try {
	    // call the operation
	    $oResponse = $this->_oSoapClient->getAlarms ( $oInput );
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
   * @desc searchAlarms call
   * @param searchAlarms $oInput
   * @return searchAlarmsResponse $oResponse
   * 
   */
  public function call_searchAlarms($oInput) {
    
    try {
	    // call the operation
	    $oResponse = $this->_oSoapClient->searchAlarms ( $oInput );
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
   * @desc createTriggers call
   * @param createTrigger $oInput
   * @return createTriggerResponse $oResponse
   * 
   */
  public function call_createTrigger($oInput) {
    
    try {
	    // call the operation
	    $oResponse = $this->_oSoapClient->createTrigger( $oInput );
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
   * @desc  updateTrigger call
   * @param updateTrigger $oInput
   * @return updateTriggerResponse $oResponse
   * 
   */
  public function call_updateTrigger($oInput) {
    
    try {

	    // call the operation
	    $oResponse = $this->_oSoapClient->updateTrigger( $oInput );
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
   * @desc  deleteTrigger call
   * @param deleteTrigger $oInput
   * @return deleteTriggerResponse $oResponse
   * 
   */
  public function call_deleteTrigger($oInput) {
    
    try {
	    // call the operation
	    $oResponse = $this->_oSoapClient->deleteTrigger( $oInput );
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
   * @desc listTrigger call 	
   * @param ListTrigger $oInput
   * @return ListTriggerResponse $oResponse
   * 
   */
  public function call_listTriggers($oInput) {

    try {
	    // call the operation
	    $oResponse = $this->_oSoapClient->listTriggers( $oInput );
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
   * @desc manageAlarms call
   * @param ListTrigger $oInput
   * @return ListTriggerResponse $oResponse
   *
   */
  public function call_manageAlarms($oInput) {
  
  	try {
  		// call the operation
  		$oResponse = $this->_oSoapClient->manageAlarms( $oInput );
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
  
}

?>


		  	
