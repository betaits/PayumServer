<?php
namespace Payum\Server\Model;

use Makasim\Values\ValuesTrait;
use Makasim\Yadm\PersistableTrait;
use MongoDB\BSON\Persistable;
use Payum\Core\Model\GatewayConfigInterface;

class GatewayConfig implements GatewayConfigInterface, Persistable
{
    use ValuesTrait;
    use PersistableTrait;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getSelfValue('id');
    }

    /**
     * {@inheritdoc}
     */
    public function getGatewayName()
    {
        return $this->getSelfValue('gatewayName');
    }

    /**
     * {@inheritdoc}
     */
    public function setGatewayName($gatewayName)
    {
        $this->values['gatewayName'] = $gatewayName;
        $this->setSelfValue('gatewayName', $gatewayName);
        $this->setSelfValue('id', $gatewayName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFactoryName()
    {
        return $this->getSelfValue('factoryName');
    }

    /**
     * {@inheritdoc}
     */
    public function setFactoryName($name)
    {
        $this->setSelfValue('factoryName', $name);
    }

    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
        $this->setSelfValue('config', $config);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return $this->getSelfValue('config', [], 'array');
    }
}
