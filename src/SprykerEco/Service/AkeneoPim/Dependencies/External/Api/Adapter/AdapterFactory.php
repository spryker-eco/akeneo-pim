<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeGroupApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\CategoryApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\ChannelApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\CurrencyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\LocaleApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\MeasureFamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\AssociationTypeApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductMediaFileApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductModelApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk\AkeneoPimSdkFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk\AkeneoPimSdkFactoryInterface;
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
    public function createProductApiAdapter(): ApiAdapterInterface
    {
        return new ProductApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCategoryApiAdapter(): ApiAdapterInterface
    {
        return new CategoryApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeApiAdapter(): ApiAdapterInterface
    {
        return new AttributeApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeGroupApiAdapter(): ApiAdapterInterface
    {
        return new AttributeGroupApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    public function createAttributeOptionApiAdapter(): AttributeOptionApiAdapterInterface
    {
        return new AttributeOptionApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssociationTypeApiAdapter(): ApiAdapterInterface
    {
        return new AssociationTypeApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createChannelApiAdapter(): ApiAdapterInterface
    {
        return new ChannelApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCurrencyApiAdapter(): ApiAdapterInterface
    {
        return new CurrencyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createFamilyApiAdapter(): ApiAdapterInterface
    {
        return new FamilyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    public function createFamilyVariantApiAdapter(): FamilyVariantApiAdapterInterface
    {
        return new FamilyVariantApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createLocaleApiAdapter(): ApiAdapterInterface
    {
        return new LocaleApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createMeasureFamilyApiAdapter(): ApiAdapterInterface
    {
        return new MeasureFamilyApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductMediaFileApiAdapter(): ApiAdapterInterface
    {
        return new ProductMediaFileApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductModelApiAdapter(): ApiAdapterInterface
    {
        return new ProductModelApiAdapter(
            $this->createAkeneoPimSdkFactory()->createAkeneoPimClient($this->config),
            $this->wrapperFactory,
        );
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Sdk\AkeneoPimSdkFactoryInterface
     */
    public function createAkeneoPimSdkFactory(): AkeneoPimSdkFactoryInterface
    {
        return new AkeneoPimSdkFactory();
    }
}
