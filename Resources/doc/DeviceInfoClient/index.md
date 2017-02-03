M2M_DeviceInfoClient
===

````
<?php

use submitSimSupLoc;
use LineIdentifierCollection;
use getSimReport;

// create your request
$osubmitSimSupLoc = new submitSimSupLoc();
$oLineIdentifierCollection = new LineIdentifierCollection();
$oLineIdentifierCollection->subscriptionNumber = 'your subscription number';
$osubmitSimSupLoc->lineIdentifiers = $oLineIdentifierCollection;

// get client proxy from service provider
$proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
$service = $providerProxy->get('device_info');

// call webservice
try {
    $response = $service->call_submitSimSupLoc( $osubmitSimSupLoc );
    $iTicketNumber = $response->ticketNumber;
    	
	if ($iTicketNumber > 0) {
		$ogetSimReport = new getSimReport ();
		$ogetSimReport->ticketNumber = $iTicketNumber;
		
		$ticketStatus = "WARNING";
		
		while ( ($ticketStatus != "TERMINATED") && ($ticketStatus != "ERROR") ) {
			sleep ( 30 ); // Call the operation 30s later
			$result = $service->call_getSimReport ( $ogetSimReport );
			$ticketStatus = $result->globalProcessingStatus;
		}
	}
} catch (\Exception $e) {
    
}
````
Resources 
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)