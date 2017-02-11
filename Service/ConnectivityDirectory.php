<?php

namespace M12U\Bundle\Sdk\Orange\IotM2MBundle\Service;

use getConnectivityDirectory;
use LineIdentifierCollection;
use InvalidArgumentException;

/**
 * Class ConnectivityDirectory
 * @package M12U\Bundle\Sdk\Orange\IotM2MBundle\Service
 */
class ConnectivityDirectory implements ServiceInterface
{
    /**
     * @var \M2M_ConnectivityDirectoryClient
     */
    protected $client;

    /**
     * ConnectivityDirectory constructor.
     */
    public function __construct(\M2M_ConnectivityDirectoryClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $parameters
     */
    public function getConnectivityDirectory(array $parameters = [])
    {
        $data = $this->getParameters($parameters);

        return $this->client->call_getConnectivityDirectory($data);
    }

    /**
     * @param array $parameters
     */
    public function searchInConnectivity(array $parameters = [])
    {
        $data = $this->getParameters($parameters);

        return $this->client->call_searchInConnectivityDirectory($data);
    }

    /**
     * @param array $parameters
     */
    public function updateConnectivityDirectory(array $parameters = [])
    {
        $data = $this->getParameters($parameters);

        return $this->client->call_updateConnectivityDirectory($data);
    }

    /**
     * @param array $parameters
     */
    public function createCustomizedFields(array $parameters = [])
    {
        $data = $this->getParameters($parameters);

        return $this->client->call_createCustomizedFields($data);
    }

    /**
     * @param array $parameters
     */
    public function updateCustomizedFields(array $parameters = [])
    {
        $data = $this->getParameters($parameters);

        return $this->client->call_updateCustomizedFields($data);
    }

    /**
     * @param array $parameters
     */
    public function getCustomizedFields(array $parameters = [])
    {
        $data = $this->getParameters($parameters);

        return $this->client->call_getCustomizedFields($data);
    }

    /**
     * @param array $parameters
     * @return getConnectivityDirectory
     */
    protected function getParameters(array $parameters = [])
    {
        $cunsumption = [
            'showGroup' => null,
            'showStatusReason' => null,
            'showHierarchyDetail' => null,
            'showDeviceInfo' => true,
            'showIccid' => true,
            'showImsi' => true,
            'showCustomInformations' => true,
        ];

        $connectivityDirectory = new getConnectivityDirectory();
        if (! array_key_exists('lineIdentifiers', $parameters)) {
            throw new InvalidArgumentException;
        }

        $connectivityDirectory->lineIdentifiers = new LineIdentifierCollection();
        if (! is_array($parameters['lineIdentifiers'])) {
            $parameters['lineIdentifiers'] = [$parameters['lineIdentifiers']];
        }
        $connectivityDirectory->lineIdentifiers = new LineIdentifierCollection();
        $connectivityDirectory->lineIdentifiers->subscriptionNumber = $parameters['line_identifiers'];

        foreach ($cunsumption as $key => $value) {
            if (array_key_exists($key, $parameters)) {
                $connectivityDirectory->{$key} = $parameters[$key];
            } else {
                $connectivityDirectory->{$key} = $value;
            }
        }

        return $connectivityDirectory;
    }
}