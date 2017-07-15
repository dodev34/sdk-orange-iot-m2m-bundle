M2M_SimLifecycleManagementClient
===

````
<?php

use submitUpdateSimStatusRequest;
use LineIdentifierCollection;
use getUpdateSimStatusResult

// create your request
$oParams = new submitUpdateSimStatusRequest();
$oParams->lineIdentifiers = new LineIdentifierCollection();
$oParams->lineIdentifiers->subscriptionNumber = 'your subscription number';
$oParams->requestedStatus = 'your requested status';

// get client proxy from service provider
$proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
$service = $providerProxy->get('sim_lifecycle_management');

// call webservice
try {
    $response = $service->call_submitUpdateSimStatusRequest( $oParams );
    $iTicketNumber = $response->ticketNumber;
    
	if ($iTicketNumber > 0) {
		// To test this webmethod, you may want to run call_submitUpdateSimStatusRequest so you can get a ticket number
		$oUpdateSimStatusResult = new getUpdateSimStatusResult();
		$oUpdateSimStatusResult->ticketNumber = $iTicketNumber;
		
		$ticketStatus = "WARNING";
		
		while ( ($ticketStatus != "TERMINATED") && ($ticketStatus != "ERROR") ) {
			sleep ( 30 ); // Call the operation 30s later
			$result = $service->call_getUpdateSimStatus( $oUpdateSimStatusResult );
			$ticketStatus = $result->globalProcessingStatus;
		}
		
	}
} catch (\Exception $e) {
    
}
````
Resources 
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)