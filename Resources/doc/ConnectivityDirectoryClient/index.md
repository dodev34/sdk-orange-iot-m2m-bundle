M2M_ConnectivityDirectoryClient
===

````
<?php

use getConnectivityDirectory;
use LineIdentifierCollection;
use getUpdateSimStatusResult

// create your request
$oGetConnectivityDirectory = new getConnectivityDirectory();
$oGetConnectivityDirectory->lineIdentifiers = new LineIdentifierCollection();
$oGetConnectivityDirectory->lineIdentifiers->subscriptionNumber = array(
        'your subscription number'
);
$oGetConnectivityDirectory->showGroup = null;
$oGetConnectivityDirectory->showStatusReason = null;
$oGetConnectivityDirectory->showHierarchyDetail = null;
$oGetConnectivityDirectory->showDeviceInfo = true;
$oGetConnectivityDirectory->showIccid = true;
$oGetConnectivityDirectory->showImsi = true;
$oGetConnectivityDirectory->showCustomInformations = true;

// get client proxy from service provider
$proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
$service = $providerProxy->get('connectivity_directory');

// call webservice
try {
    $response = $service->call_getConnectivityDirectory( $oGetConnectivityDirectory );
} catch (\Exception $e) {
    
}
````
Resources 
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)