<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;

interface AkeneoPimSdkFactoryInterface
{
    /**
     * @param \SprykerEco\Service\AkeneoPim\AkeneoPimConfig $config
     *
     * @return \Akeneo\Pim\ApiClient\AkeneoPimClientInterface|AkeneoPimEnterpriseClientInterface
     */
    public function createAkeneoPimClient(AkeneoPimConfig $config): AkeneoPimClientInterface;
}
