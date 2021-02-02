<?php

/**
 * Part of the Connectus package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Connectus
 * @version    1.0.0
 * @author     Jose Lorente
 * @license    BSD License (3-clause)
 * @copyright  (c) 2019, Jose Lorente
 */

namespace Jlorente\Connectus;

class Connectus
{

    /**
     * The package version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * The Config repository instance.
     *
     * @var \Jlorente\Connectus\ConfigInterface
     */
    protected $config;

    /**
     * Constructor.
     *
     * @param string $apiKey
     * @param string $accountId
     * @param int $requestRetries
     * @return void
     */
    public function __construct($apiKey = null, $accountId = null, $requestRetries = null)
    {
        $this->config = new Config(self::VERSION, $apiKey, $accountId, $requestRetries);
    }

    /**
     * Create a new Connectus API instance.
     *
     * @param string $apiKey
     * @param string $accountId
     * @param int $requestRetries
     * @return \Jlorente\Connectus\Connectus
     */
    public static function make($apiKey = null, $accountId = null, $requestRetries = null)
    {
        return new static($apiKey, $accountId, $requestRetries);
    }

    /**
     * Returns the current package version.
     *
     * @return string
     */
    public static function getVersion()
    {
        return self::VERSION;
    }

    /**
     * Returns the Config repository instance.
     *
     * @return \Jlorente\Connectus\ConfigInterface
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Sets the Config repository instance.
     *
     * @param  \Jlorente\Connectus\ConfigInterface  $config
     * @return $this
     */
    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Returns the Connectus API key.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->config->getApiKey();
    }

    /**
     * Sets the Connectus API key.
     *
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->config->setApiKey($apiKey);

        return $this;
    }

    /**
     * Returns the Connectus API secret.
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->config->getAccountId();
    }

    /**
     * Sets the Connectus API secret.
     *
     * @param string $accountId
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->config->setAccountId($accountId);

        return $this;
    }

    /**
     * Dynamically handle missing methods.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return \Jlorente\Connectus\Core\ApiInterface
     */
    public function api()
    {
        return new Api($this->config);
    }

}
