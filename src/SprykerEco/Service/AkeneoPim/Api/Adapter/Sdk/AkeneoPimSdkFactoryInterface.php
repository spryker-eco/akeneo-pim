<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter\Sdk;

use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;

interface AkeneoPimSdkFactoryInterface
{
    /**
     * @param \SprykerEco\Zed\AkeneoPim\AkeneoPimConfig $config
     *
     * @return \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    public function createAkeneoPimClient(AkeneoPimConfig $config);
}
