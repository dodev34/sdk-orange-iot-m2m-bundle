<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle\Parser;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Psr\Log\LoggerInterface;

use Exception;

/**
 * Class YmlParser
 * @package M12U\Bundle\Sdk\Orange\IotM2MBundle\Parser
 */
class YmlParser extends \M2M_IniParser
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * YmlParser constructor.
     * @param string $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        // In ini file, yes is translated to 1
        if($this->getProperty("DisableLogger") === "yes" || $this->getProperty("DisableLogger") == "1") {
            $oNulWriter = new \Zend_Log_Writer_Null;
            $oLogger = new \Zend_Log($oNulWriter);
            \Zend_Registry::set( 'log', $oLogger );
        } else {
            /** @var LoggerInterface $logger */
            $logger = $this->container->get('logger');

            \Zend_Registry::set( 'log', $logger );
        }
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * If section is empty, look at document root
     * @throws \M2M_IniParserException
     */
    public function getProperty($propertyname, $section = "m12u.sdk.orange.iot_m2m.config")
    {
        $parameterName = sprintf('%s.%s', $section, strtolower($propertyname));

        try {
            return $this->getContainer()->getParameter($parameterName);
        } catch (Exception $e) {
            throw new \M2M_IniParserException($e->getMessage(), $e->getCode());
        }
    }
}