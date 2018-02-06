<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim;

use Spryker\Service\Kernel\AbstractServiceFactory;
use SprykerEco\Service\AkeneoPim\Api\Adapter\AdapterFactory;

/**
 * @method \SprykerEco\Service\AkeneoPim\AkeneoPimConfig getConfig()
 */
class AkeneoPimServiceFactory extends AbstractServiceFactory
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\AdapterFactoryInterface
     */
    public function createAkeneoPimAdapterFactory()
    {
        return new AdapterFactory($this->getConfig());
    }
}
