M2M_ConnectivityDirectoryClient
===

````
<?php

// 1° retrieve service provider
$provider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');

// 2° retrieve your service
$service = $provider->get('connectivity_directory');

// finily, call your service
try {
    $parameters = [
        'subscriptionNumber' => ['your arry of subscriptions numbers']|'your subscription number'
    ];
    
    $response = $service->getConnectivityDirectory($parameters);
} catch (\Exception $e) {
    
}
````
Resources 
---
[Official documentation](https://developer.orange.com/apis/m2m-france/code-sample)