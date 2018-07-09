<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim;

use Spryker\Service\Kernel\AbstractServiceFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactory;

/**
 * @method \SprykerEco\Service\AkeneoPim\AkeneoPimConfig getConfig()
 */
class AkeneoPimServiceFactory extends AbstractServiceFactory
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactoryInterface
     */
    public function createAkeneoPimAdapterFactory()
    {
        return new AdapterFactory($this->getConfig(), $this->createWrapperFactory());
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    public function createWrapperFactory()
    {
        return new WrapperFactory();
    }
}
