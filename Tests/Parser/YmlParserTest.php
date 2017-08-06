<?php

namespace M12U\Bundle\Sdk\Orange\IotBundle\Tests\Parser;

use M12U\Bundle\Sdk\Orange\IotM2MBundle\Parser\YmlParser;
use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class YmlParserTest
 * @package M12U\Bundle\Sdk\Orange\IotBundle\Tests\Parser
 */
class YmlParserTest extends PHPUnit_Framework_TestCase
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

    public function testGetContainer()
    {
        $container = new Container();
        $container->setParameter('m12u.sdk.orange.iot_m2m.config.disablelogger', 'yes');
        $ymlParser = new YmlParser($container);

        $result = $ymlParser->getContainer();
        $this->assertInstanceOf(ContainerInterface::class, $result);
    }

    public function testGetProperty()
    {
        $container = new Container();
        $container->setParameter('m12u.sdk.orange.iot_m2m.config.disablelogger', 'yes');
        $container->setParameter('m12u.sdk.orange.iot_m2m.config.fake', 'is_fake_param');

        $ymlParser = new YmlParser($container);
        $this->assertInstanceOf(\M2M_IniParser::class, $ymlParser);
        $result = $ymlParser->getProperty('fake');
        $this->assertEquals('is_fake_param', $result);
    }

    /**
     * @expectedException \M2M_IniParserException
     */
    public function testGetPropertyM2M_IniParserException()
    {
        $container = new Container();
        $container->setParameter('m12u.sdk.orange.iot_m2m.config.disablelogger', 'yes');
        (new YmlParser($container))->getProperty('M2M_IniParserException');
    }
}