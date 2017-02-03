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
| Proxy client | Service provider |
|----------------------------------|------------------------|
| M2M_SimLifecycleManagementClient |  sim_lifecycle_manager |
| M2M_NetworkStatusClient | network_status |
| M2M_DeviceInfoClient | device_info |
| M2M_ConnectivityDirectoryClient | connectivity_directory |
| M2M_IncidentDiagnosticsV2Client | incident_diagnostics |
| M2M_SessionHistoryV2Client | session_history |
| M2M_CustomerAlarmV2Client | customer_alarm |


Service documentation:
===

M2M_SimLifecycleManagementClient
---
[SimLifecycleManagementClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/SimLifecycleManagementClient/index.md)

M2M_NetworkStatusClient
---
[NetworkStatusClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/NetworkStatusClient/index.md)

M2M_DeviceInfoClient
---
[DeviceInfoClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/DeviceInfoClient/index.md)

M2M_ConnectivityDirectoryClient
---
[ConnectivityDirectoryClient/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/ConnectivityDirectoryClient/index.md)

M2M_IncidentDiagnosticsV2Client
---
[IncidentDiagnosticsV2Client/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/IncidentDiagnosticsV2Client/index.md)

M2M_SessionHistoryV2Client
---
[SessionHistoryV2Client/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/IncidentDiagnosticsV2Client/index.md)

M2M_CustomerAlarmV2Client
---
[CustomerAlarmV2Client/index.md](https://github.com/dodev34/sdk-orange-iot-m2m-bundle/tree/master/Resources/doc/CustomerAlarmV2Client/index.md)