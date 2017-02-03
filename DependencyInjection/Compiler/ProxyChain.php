<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle\DependencyInjection\Compiler;

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
    public function addProxy(\M2M_M2mClient $proxy, $alias = null)
    {
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