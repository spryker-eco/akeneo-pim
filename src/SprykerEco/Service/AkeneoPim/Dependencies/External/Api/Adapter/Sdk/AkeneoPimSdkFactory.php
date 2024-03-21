<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk;

use Akeneo\Pim\ApiClient\AkeneoPimClientBuilder;
use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use Akeneo\Pim\ApiClient\Client\ClientInterface as AkeneoClientInterface;
use Psr\Http\Client\ClientInterface;
use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\HttpClient\AkeneoHttpClient;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\HttpClient\Client;

class AkeneoPimSdkFactory implements AkeneoPimSdkFactoryInterface
{
    /**
     * @param \SprykerEco\Service\AkeneoPim\AkeneoPimConfig $config
     *
     * @return \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    public function createAkeneoPimClient(AkeneoPimConfig $config): AkeneoPimClientInterface
    {
        $clientBuilder = new AkeneoPimClientBuilder($config->getHost());
        $clientBuilder->setHttpClient($this->getHttpClient());

        return $clientBuilder->buildAuthenticatedByPassword(
            $config->getClientId(),
            $config->getClientSecret(),
            $config->getUsername(),
            $config->getPassword(),
        );
    }

    /**
     * @return \Psr\Http\Client\ClientInterface
     */
    public function createHttpClient(): ClientInterface
    {
        return new Client();
    }

    /**
     * @return \Akeneo\Pim\ApiClient\Client\ClientInterface
     */
    public function createAkeneoHttpClient(): AkeneoClientInterface
    {
        return new AkeneoHttpClient();
    }

    /**
     * @return \Akeneo\Pim\ApiClient\Client\ClientInterface|\Psr\Http\Client\ClientInterface
     */
    public function getHttpClient()
    {
        if (interface_exists('\Akeneo\Pim\ApiClient\Client\ClientInterface')) {
            return $this->createAkeneoHttpClient();
        }

        return $this->createHttpClient();
    }
}
