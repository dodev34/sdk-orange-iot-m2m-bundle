<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class M12USdkOrangeIotM2MExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.iccidprefix',
            $config['iccidPrefix']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.disableLogger',
            $config['DisableLogger']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.sessionhistoryUrl2',
            $config['connection']['sessionHistoryUrl2']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.proxyhost',
            $config['connection']['proxyHost']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.proxyPort',
            $config['connection']['proxyPort']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.proxyUsername',
            $config['connection']['proxyUsername']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.proxypassword',
            $config['connection']['proxyPassword']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.login',
            $config['connection']['login']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.password',
            $config['connection']['password']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.servicecustomeralarmurl2',
            $config['connection']['ServiceCustomerAlarmUrl2']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.IncidentDiagnosticsUrl2',
            $config['connection']['IncidentDiagnosticsUrl2']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.connectivityDirectoryUrl',
            $config['connection']['connectivityDirectoryUrl']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.deviceinfourl',
            $config['connection']['deviceInfoUrl']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.networkstatusurl',
            $config['connection']['networkStatusUrl']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.simlifecyclemanagementurl',
            $config['connection']['simLifecycleManagementUrl']
        );
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.config.traffictrackingurl',
            $config['connection']['TrafficTrackingUrl']
        );
    }
}
