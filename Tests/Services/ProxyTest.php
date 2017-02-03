<?php

namespace M12U\Bundle\Sdk\Orange\IotBundle\Tests\Services;

use M12U\Bundle\Sdk\Orange\IotM2MBundle\Provider\ProxyProvider;

use Symfony\Component\DependencyInjection\ContainerInterface;

use M2M_SimLifecycleManagementClient;
use M2M_NetworkStatusClient;
use M2M_DeviceInfoClient;
use M2M_ConnectivityDirectoryClient;
use M2M_IncidentDiagnosticsV2Client;
use M2M_SessionHistoryV2Client;

use PHPUnit_Framework_TestCase;

/**
 * Class ProxyTest
 * @package M12U\Bundle\Sdk\Orange\IotBundle\Tests\Services
 */
class ProxyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ContainerInterface
     */
    private $container;

    protected function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $this->container = $kernel->getContainer();
    }

    public function testServiceIsDefinedInContainer()
    {
        // get proxy provider
        $proxyProvider = $this->container->get('m12u.sdk.orange.iot_m2m.provider_proxy');
        $this->assertInstanceOf(ProxyProvider::class, $proxyProvider,
            sprintf("Service '%s' must be '%s'",
                (is_object($proxyProvider) ? get_class($proxyProvider) : $proxyProvider),
                ProxyProvider::class))
        ;

        // service : sim_lifecycle_management
        $simLifecycleManagement = $proxyProvider->get('sim_lifecycle_management');
        $this->assertInstanceOf(M2M_SimLifecycleManagementClient::class, $simLifecycleManagement,
            sprintf("Service '%s' must be '%s'",
                (is_object($simLifecycleManagement) ? get_class($simLifecycleManagement) : $simLifecycleManagement),
                M2M_SimLifecycleManagementClient::class))
        ;

        // service : network_status
        $networkStatus = $proxyProvider->get('network_status');
        $this->assertInstanceOf(M2M_NetworkStatusClient::class, $networkStatus,
            sprintf("Service '%s' must be '%s'",
                (is_object($networkStatus) ? get_class($networkStatus) : $networkStatus),
                M2M_NetworkStatusClient::class))
        ;

        // service : device_info
        $deviceInfo = $proxyProvider->get('device_info');
        $this->assertInstanceOf(M2M_DeviceInfoClient::class, $deviceInfo,
            sprintf("Service '%s' must be '%s'",
                (is_object($deviceInfo) ? get_class($deviceInfo) : $deviceInfo),
                M2M_DeviceInfoClient::class))
        ;

        // service : connectivity_directory
        $connectivityDirectory = $proxyProvider->get('connectivity_directory');
        $this->assertInstanceOf(M2M_ConnectivityDirectoryClient::class, $connectivityDirectory,
            sprintf("Service '%s' must be '%s'",
                (is_object($connectivityDirectory) ? get_class($connectivityDirectory) : $connectivityDirectory),
                M2M_ConnectivityDirectoryClient::class))
        ;

        // service : incident_diagnostics
        $incidentDiagnostics = $proxyProvider->get('incident_diagnostics');
        $this->assertInstanceOf(M2M_IncidentDiagnosticsV2Client::class, $incidentDiagnostics,
            sprintf("Service '%s' must be '%s'",
                (is_object($incidentDiagnostics) ? get_class($incidentDiagnostics) : $incidentDiagnostics),
                M2M_IncidentDiagnosticsV2Client::class))
        ;

        // service : session_history
        $sessionHistory = $proxyProvider->get('session_history');
        $this->assertInstanceOf(M2M_SessionHistoryV2Client::class, $sessionHistory,
            sprintf("Service '%s' must be '%s'",
                (is_object($sessionHistory) ? get_class($sessionHistory) : $sessionHistory),
                M2M_SessionHistoryV2Client::class))
        ;
    }
}
