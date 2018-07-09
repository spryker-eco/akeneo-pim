<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim;

use Spryker\Service\Kernel\AbstractServiceFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactoryInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

/**
 * @method \SprykerEco\Service\AkeneoPim\AkeneoPimConfig getConfig()
 */
class AkeneoPimServiceFactory extends AbstractServiceFactory
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactoryInterface
     */
    public function createAkeneoPimAdapterFactory(): AdapterFactoryInterface
    {
        return new AdapterFactory($this->getConfig(), $this->createWrapperFactory());
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    public function createWrapperFactory(): WrapperFactoryInterface
    {
        return new WrapperFactory();
    }
}
