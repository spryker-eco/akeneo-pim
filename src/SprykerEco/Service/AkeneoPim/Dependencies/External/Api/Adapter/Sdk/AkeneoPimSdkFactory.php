<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk;

use Akeneo\Pim\ApiClient\AkeneoPimClientBuilder;
use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use Http\Adapter\Guzzle6\Client;
use Http\Client\HttpClient;
use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;

class AkeneoPimSdkFactory implements AkeneoPimSdkFactoryInterface
{
    /**
     * @param \SprykerEco\Service\AkeneoPim\AkeneoPimConfig $config
     *
     * @return \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    public function createAkeneoPimClient(AkeneoPimConfig $config): AkeneoPimClientInterface
    {
        $clientBuilder = new AkeneoPimClientBuilder(
            $config->getHost()
        );
        $clientBuilder->setHttpClient(
            $this->createHttpClient()
        );

        return $clientBuilder->buildAuthenticatedByPassword(
            $config->getClientId(),
            $config->getClientSecret(),
            $config->getUsername(),
            $config->getPassword()
        );
    }

    /**
     * @SuppressWarnings(FactoryMethodReturnInterfaceRule)
     *
     * @return \Http\Client\HttpClient
     */
    protected function createHttpClient(): HttpClient
    {
        return new Client();
    }
}
