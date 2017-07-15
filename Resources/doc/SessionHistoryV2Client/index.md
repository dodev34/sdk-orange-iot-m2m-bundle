M2M_SessionHistoryV2Client
===

````
<?php

use submitSessionHistoryRequest;
use LineIdentifier;
use Zend_Date;
use getSessionHistory;

$oSubmitSessionHistoryRequest = new submitSessionHistoryRequest();
$oSubmitSessionHistoryRequest->lineIdentifier = new LineIdentifier();
$oSubmitSessionHistoryRequest->lineIdentifier->subscriptionNumber = 'your subscription number';
$startDate = new Zend_Date ( Zend_Date::now (), Zend_Date::ATOM );
$startDate->add ( - 30, Zend_Date::DAY );

$oSubmitSessionHistoryRequest->periodStartDateTime = $startDate->toString ( Zend_Date::ATOM );
$endDate = new Zend_Date ( Zend_Date::now (), Zend_Date::ATOM ); // Comparison greater or equals.
$oSubmitSessionHistoryRequest->periodEndDateTime = $endDate->toString ( Zend_Date::ATOM );

// get client proxy from service provider
$proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
$service = $providerProxy->get('session_history');

// call webservice
try {
    $response = $service->call_submitSessionHistoryV2Request( $oSubmitSessionHistoryRequest );
    $iTicketNumber = $response->ticketNumber;
    
    if ($iTicketNumber > 0) {
        sleep ( 30 ); // Call the operation 30s later
                   
        $oGetSessionHistory = new getSessionHistory();
        $oGetSessionHistory->ticketNumber = $iTicketNumber;
        
        // Call
        $oGetSessionHistoryResponse = $service->call_getSessionHistoryV2 ( $oGetSessionHistory );
        $result = $result->sessions->numberOfRemainingResults;
        
        while ( $iNumberOfRemainingResults > 0 ) {
            sleep ( 5 );
            $result = $service->call_getSessionHistoryV2 ( $oGetSessionHistory );
            $remainingResults = $result->sessions->numberOfRemainingResults;
        }
    }
} catch (\Exception $e) {

}
````
Resources
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)