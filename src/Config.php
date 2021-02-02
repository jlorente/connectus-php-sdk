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

class Config implements ConfigInterface
{

    /**
     * The current package version.
     *
     * @var string
     */
    protected $version;

    /**
     * The Connectus API key.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The Connectus Account id.
     *
     * @var string
     */
    protected $accountId;

    /**
     * The Connectus API token.
     *
     * @var string
     */
    protected $requestRetries;

    /**
     * Constructor.
     *
     * @param  string  $version
     * @param  string  $apiKey
     * @param  string  $requestRetries
     * @return void
     * @throws \RuntimeException
     */
    public function __construct($version, $apiKey, $accountId, $requestRetries = 0)
    {
        $this->setVersion($version);

        $this->setApiKey($apiKey ?: getenv('CONNECTUS_API_KEY'));

        $this->setAccountId($accountId ?: getenv('CONNECTUS_ACCOUNT_ID'));

        $this->setRequestRetries($requestRetries ?? getenv('CONNECTUS_REQUEST_RETRIES') ?? 0);

        if (!$this->apiKey) {
            throw new \RuntimeException('The Connectus api_key is not defined!');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestRetries()
    {
        return $this->requestRetries;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequestRetries($retries)
    {
        $this->requestRetries = $retries;
        return $this;
    }

}
