<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection\Compiler;
use M12U\Bundle\Sdk\Orange\IotM2MBundle\Service\ServiceInterface;

/**
 * Class ProxyChain
 * @package M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection\Compiler
 */
class ProxyChain
{
    /**
     * @var array of ClientInterface
     */
    protected $proxis;

    /**
     * Chain constructor.
     */
    public function __construct()
    {
        $this->proxis = array();
    }

    /**
     * @param $proxy
     * @param null|string $alias
     * @return $this
     */
    public function addProxy($proxy, $alias = null)
    {

        if (!($proxy instanceof \M2M_M2mClient) && !($proxy instanceof ServiceInterface)) {
            $instancesOf = [
                \M2M_M2mClient::class,
                ServiceInterface::class,
            ];
            throw new \InvalidArgumentException(sprintf(
                "your proxy must be implements %s", implode(" or ", $instancesOf)));
        }

        /** @var string $key */
        $key = is_null($alias) ? get_class($proxy) : $alias;
        $this->proxis[$key] = $proxy;

        return $this;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getProxy($name)
    {
        if (array_key_exists($name, $this->proxis)) {
            return $this->proxis[$name];
        }
    }
}