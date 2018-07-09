<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeGroupApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\CategoryApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\ChannelApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\CurrencyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\LocaleApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\MeasureFamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\AssociationTypeApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductMediaFileApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductModelApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk\AkeneoPimSdkFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class AdapterFactory implements AdapterFactoryInterface
{
    /**
     * @var \SprykerEco\Service\AkeneoPim\AkeneoPimConfig
     */
    protected $config;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

    /**
     * @param \SprykerEco\Service\AkeneoPim\AkeneoPimConfig $config
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimConfig $config, WrapperFactoryInterface $wrapperFactory)
    {
        $this->config = $config;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductApiAdapter()
    {
        return new ProductApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCategoryApiAdapter()
    {
        return new CategoryApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeApiAdapter()
    {
        return new AttributeApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeGroupApiAdapter()
    {
        return new AttributeGroupApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    public function createAttributeOptionApiAdapter()
    {
        return new AttributeOptionApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssociationTypeApiAdapter()
    {
        return new AssociationTypeApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createChannelApiAdapter()
    {
        return new ChannelApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCurrencyApiAdapter()
    {
        return new CurrencyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createFamilyApiAdapter()
    {
        return new FamilyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    public function createFamilyVariantApiAdapter()
    {
        return new FamilyVariantApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createLocaleApiAdapter()
    {
        return new LocaleApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createMeasureFamilyApiAdapter()
    {
        return new MeasureFamilyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductMediaFileApiAdapter()
    {
        return new ProductMediaFileApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductModelApiAdapter()
    {
        return new ProductModelApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk\AkeneoPimSdkFactoryInterface
     */
    public function createAkeneoPimSdkFactory()
    {
        return new AkeneoPimSdkFactory();
    }
}
