M2M_NetworkStatusClient
===

````
<?php

use getNetworkStatus;
use Coordinates;

// create your request
$oNetworkStatus = new getNetworkStatus();
$oNetworkStatus->coordinates = new Coordinates();
$oNetworkStatus->coordinates->latitude = $latitude;
$oNetworkStatus->coordinates->longitude = $longitude; 
//new coverage info will be returned in the response.
$oNetworkStatus->showExtendedFeatures = true;

// get client proxy from service provider
$proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
$service = $providerProxy->get('network_status');

// call webservice
try {
    $response = $service->call_getNetworkStatus( $oNetworkStatus );
} catch (\Exception $e) {
    
}
````
Resources 
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)