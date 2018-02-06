<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter;

use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeGroupApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeOptionApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Category\CategoryApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Category\ChannelApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Category\CurrencyApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Category\LocaleApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyVariantApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Family\MeasureFamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\AssociationTypeApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\ProductApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\ProductMediaFileApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\ProductModelApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Sdk\AkeneoPimSdkFactory;

class AdapterFactory implements AdapterFactoryInterface
{
    /**
     * @var \SprykerEco\Service\AkeneoPim\AkeneoPimConfig
     */
    protected $config;

    /**
     * @param \SprykerEco\Service\AkeneoPim\AkeneoPimConfig $config
     */
    public function __construct(AkeneoPimConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createProductApiAdapter()
    {
        return new ProductApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createCategoryApiAdapter()
    {
        return new CategoryApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeApiAdapter()
    {
        return new AttributeApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeGroupApiAdapter()
    {
        return new AttributeGroupApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    public function createAttributeOptionApiAdapter()
    {
        return new AttributeOptionApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createAssociationTypeApiAdapter()
    {
        return new AssociationTypeApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createChannelApiAdapter()
    {
        return new ChannelApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createCurrencyApiAdapter()
    {
        return new CurrencyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createFamilyApiAdapter()
    {
        return new FamilyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    public function createFamilyVariantApiAdapter()
    {
        return new FamilyVariantApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createLocaleApiAdapter()
    {
        return new LocaleApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createMeasureFamilyApiAdapter()
    {
        return new MeasureFamilyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createProductMediaFileApiAdapter()
    {
        return new ProductMediaFileApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createProductModelApiAdapter()
    {
        return new ProductModelApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config)
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Sdk\AkeneoPimSdkFactoryInterface
     */
    public function createAkeneoPimSdkFactory()
    {
        return new AkeneoPimSdkFactory();
    }
}
