<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('m12_u_sdk_orange_iot_m2_m');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $this->addConnectionSection($rootNode);

        return $treeBuilder;
    }

    /**
     * @param \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition $builder
     */
    private function addConnectionSection(\Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition $builder)
    {
        $builder
            ->children()
                ->scalarNode('DisableLogger')->defaultValue("yes")->end()
                ->scalarNode('iccidPrefix')->defaultValue("893301")->end()
                ->arrayNode('connection')
                    ->children()
                        ->scalarNode('proxyHost')->defaultNull()->end()
                        ->scalarNode('proxyPort')->defaultNull()->end()
                        ->scalarNode('proxyUsername')->defaultNull()->end()
                        ->scalarNode('proxyPassword')->defaultNull()->end()
                        ->scalarNode('login')->cannotBeEmpty()->end()
                        ->scalarNode('password')->cannotBeEmpty()->end()
                        ->scalarNode('ServiceCustomerAlarmUrl2')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/CustomerAlarm-2")->end()
                        ->scalarNode('connectivityDirectoryUrl')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/ConnectivityDirectory-1")->end()
                        ->scalarNode('deviceInfoUrl')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/IncidentDiagnostics-2")->end()
                        ->scalarNode('networkStatusUrl')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/NetworkStatus-1")->end()
                        ->scalarNode('IncidentDiagnosticsUrl2')->cannotBeEmpty()->defaultValue("http://api.jasperwireless.com/ws/schema")->end()
                        ->scalarNode('networkStatusUrl')->cannotBeEmpty()->defaultValue("http://api.jasperwireless.com/ws/schema")->end()
                        ->scalarNode('sessionHistoryUrl2')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/SessionHistory-2")->end()
                        ->scalarNode('simLifecycleManagementUrl')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/SimLifecycleManagement-1")->end()
                        ->scalarNode('TrafficTrackingUrl')->cannotBeEmpty()->defaultValue("https://iosw-ba.orange.com:443/MLM/TrafficTracking-1")->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
