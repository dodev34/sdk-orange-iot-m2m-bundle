Installation
===

Install it via Composer (dodev34/sdk-orange-iot-m2m-bundle on [Packagist](https://packagist.org/packages/dodev34/sdk-orange-iot-m2m-bundle));

````
composer require dodev34/sdk-orange-iot-m2m-bundle
````

Configuration YML
====

````
# app/config/config.yml
# minimal configuration

m12_u_sdk_orange_iot_m2_m:
    DisableLogger: 'yes' # or 'no'
    iccidPrefix: '893301'
    connection:
        login: 'your_login'
        password: 'your_password'
````

Exemple
===
````
// YouController.php

// get provider
$provider = $this->get('m12u.sdk.orange.iot_m2m.provider_proxy');

// get service, ex : M2M_SimLifecycleManagementClient
$serviceSimLifecycleManagementClient = $provider->get('sim_lifecycle_manager');

````


Services available : 
====
| Client doc | Service name |
|----------------------------------|------------------------|
| [SimLifecycleManagementClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/SimLifecycleManagementClient/index.md) |  sim_lifecycle_manager |
| [NetworkStatusClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/NetworkStatusClient/index.md) | network_status |
| [DeviceInfoClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/DeviceInfoClient/index.md) | device_info |
| [ConnectivityDirectoryClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/ConnectivityDirectoryClient/index.md) | connectivity_directory |
| [IncidentDiagnosticsV2Client/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/IncidentDiagnosticsV2Client/index.md) | incident_diagnostics |
| [SessionHistoryV2Client/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/IncidentDiagnosticsV2Client/index.md) | session_history |
| [CustomerAlarmV2Client/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/CustomerAlarmV2Client/index.md) | customer_alarm |
