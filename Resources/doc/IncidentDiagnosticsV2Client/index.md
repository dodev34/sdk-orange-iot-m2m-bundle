M2M_IncidentDiagnosticsV2Client
===

````
<?php

use getIncidentDiagnostics;
use LineIdentifier;

// create your request
$oIncidentDiagnostics = new getIncidentDiagnostics();
$oLineIdentifier= new LineIdentifier();  
$oLineIdentifier->subscriptionNumber = 'your subscription number';
$oIncidentDiagnostics->lineIdentifier = $oLineIdentifier; 
//If true then new coverage fields will be returned in the response.
$oIncidentDiagnostics->showExtendedFeatures = true;

// get client proxy from service provider
$proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
$service = $providerProxy->get('incident_diagnostics');

// call webservice
try {
    $response = $service->call_getIncidentDiagnosticsV2( $osubmitSimSupLoc );
} catch (\Exception $e) {
    
}
````
Resources 
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)