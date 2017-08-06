<?php

namespace M12U\Bundle\Sdk\Orange\IotBundle\Tests\Provider;

use M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection\Compiler\ProxyChain;
use M12U\Bundle\Sdk\Orange\IotM2MBundle\Provider\ProxyProvider;
use PHPUnit_Framework_TestCase;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ProxyProvider
 * @package M12U\Bundle\Sdk\Orange\IotM2MBundle\Provider
 */
class ProxyProviderTest extends PHPUnit_Framework_TestCase
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

    public function testGet()
    {
        $proxy = new \stdClass();
        $proxy->name = 'fake';
        $chain = $this->getMockBuilder(ProxyChain::class)
            ->disableOriginalConstructor()
            ->setMethods(['getProxy'])
            ->getMock();

        $chain->expects($this->any())
            ->method('getProxy')
            ->with($proxy)
        ;

        $proxyProvider = new ProxyProvider($chain);
        $result = $proxyProvider->get('test');
        $this->assertEquals('object', $result->name);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetInvalidArgumentException()
    {
        $chain = $this->getMockBuilder(ProxyChain::class)
            ->setMethods(['getProxy'])
            ->getMock();

        $chain->expects($this->once())
            ->method('getProxy')
            ->with()
        ;

        $proxyProvider = new ProxyProvider($chain);
        $proxyProvider->get('InvalidArgumentException');
    }
}