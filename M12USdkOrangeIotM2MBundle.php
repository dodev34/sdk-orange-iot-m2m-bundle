<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle;

use M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection\Compiler\ProxyPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\Bundle;

require_once __DIR__ .'/SDK/sources/M2M/Initialization.php';

/**
 * Class M12USdkOrangeIotBundle
 * @package M12U\Bundle\Sdk\Orange\IotBundle
 */
class M12USdkOrangeIotM2MBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.parser.class',
            'M12U\Bundle\Sdk\Orange\IotM2MBundle\Parser\YmlParser');

        $container
            ->register('m12u.sdk.orange.iot_m2m.parser', '%m12u.sdk.orange.iot_m2m.parser.class%')
            ->addArgument(new Reference('service_container'));

        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.service_configurator.class',
            'M2M_ServiceConfigurator');

        $container
            ->register('m12u.sdk.orange.iot_m2m.service_configurator', '%m12u.sdk.orange.iot_m2m.service_configurator.class%')
            ->addArgument(new Reference('m12u.sdk.orange.iot_m2m.parser'));

        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.provider.proxy.class',
            'M12U\Bundle\Sdk\Orange\IotM2MBundle\Provider\ProxyProvider');

        $container->setParameter(
            'm12u.sdk.orange.iot_m2m.compiler.proxy_chain.class',
            'M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection\Compiler\ProxyChain');

        $container
            ->register('m12u.sdk.orange.iot_m2m.compiler.proxy_chain', '%m12u.sdk.orange.iot_m2m.compiler.proxy_chain.class%');

        $container
            ->register('m12u.sdk.orange.iot_m2m.provider_proxy', '%m12u.sdk.orange.iot_m2m.provider.proxy.class%')
            ->addArgument(new Reference('m12u.sdk.orange.iot_m2m.compiler.proxy_chain'));

        $container->addCompilerPass(new ProxyPass());
    }
}