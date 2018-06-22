<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEcoTest\Service\AkeneoPim;

use Codeception\Test\Unit;
use Spryker\Service\Kernel\AbstractBundleConfig;
use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;
use SprykerEco\Service\AkeneoPim\AkeneoPimService;
use SprykerEco\Service\AkeneoPim\AkeneoPimServiceFactory;
use SprykerEco\Service\AkeneoPim\AkeneoPimServiceInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\AdapterFactory;
use SprykerEco\Service\AkeneoPim\Api\Adapter\AdapterFactoryInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeOptionApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Category\CategoryApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyVariantApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyVariantApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\ProductApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\ProductModelApiAdapter;

/**
 * @group SprykerEcoTest
 * @group Service
 * @group AkeneoPim
 * @group AkeneoPimServiceTest
 */
class AkeneoPimServiceTest extends Unit
{
    protected const CATEGORY_DATA = [
        'category1',
        'category2',
        'category3',
    ];

    protected const PRODUCT_DATA = [
        'product1',
        'product2',
        'product3',
    ];

    protected const ATTRIBUTE_DATA = [
        'attribute1',
        'attribute2',
        'attribute3',
    ];

    protected const FAMILY_DATA = [
        'family1',
        'family2',
        'family3',
    ];

    protected const FAMILY_VARIANTS_DATA = [
        'familyVariants1',
        'familyVariants2',
        'familyVariants3',
    ];

    protected const ATTRIBUTE_OPTIONS_DATA = [
        'option1',
        'option2',
        'option3',
    ];

    protected const PRODUCT_MODELS_DATA = [
        'model1',
        'model2',
        'model3',
    ];

    /**
     * @return void
     */
    public function testGetAllProducts()
    {
        $service = $this->prepareService();

        $this->assertEquals(static::PRODUCT_DATA, $service->getAllProducts());
    }

    /**
     * @return void
     */
    public function testGetAllCategories(): void
    {
        $service = $this->prepareService();

        $this->assertEquals(static::CATEGORY_DATA, $service->getAllCategories());
    }

    /**
     * @return void
     */
    public function testGetAllAttributes(): void
    {
        $service = $this->prepareService();

        $this->assertEquals(static::ATTRIBUTE_DATA, $service->getAllAttributes());
    }

    /**
     * @return void
     */
    public function testGetAllFamilies(): void
    {
        $service = $this->prepareService();

        $this->assertEquals(static::FAMILY_DATA, $service->getAllFamilies());
    }

    /**
     * @return void
     */
    public function testGetFamilyVariants(): void
    {
        $service = $this->prepareService();

        $this->assertEquals(static::FAMILY_VARIANTS_DATA, $service->getAllFamilyVariants('code'));
    }

    /**
     * @return void
     */
    public function testGetAllAttributeOptions(): void
    {
        $service = $this->prepareService();

        $this->assertEquals(static::ATTRIBUTE_OPTIONS_DATA, $service->getAllAttributeOptions('code'));
    }

    /**
     * @return void
     */
    public function testGetAllProductModels(): void
    {
        $service = $this->prepareService();

        $this->assertEquals(static::PRODUCT_MODELS_DATA, $service->getAllProductModels());
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\AkeneoPimServiceInterface
     */
    protected function prepareService(): AkeneoPimServiceInterface
    {
        $serviceFactory = $this->createAkeneoPimServiceFactoryMock();

        $service = $this->getAkeneoPimService();
        $service->setFactory($serviceFactory);

        return $service;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\AkeneoPimServiceInterface
     */
    protected function getAkeneoPimService(): AkeneoPimServiceInterface
    {
        return new AkeneoPimService();
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\AkeneoPimServiceFactory
     */
    protected function createAkeneoPimServiceFactoryMock(): AkeneoPimServiceFactory
    {
        $factory = $this->getMockBuilder(AkeneoPimServiceFactory::class)
            ->setMethods(['createAkeneoPimAdapterFactory'])
            ->getMock();

        $factory->expects($this->once())->method('createAkeneoPimAdapterFactory')->willReturn($this->createAdapterFactoryMock());
        $factory->setConfig($this->getAkeneoPimConfig());

        return $factory;
    }

    /**
     * @return \Spryker\Service\Kernel\AbstractBundleConfig
     */
    protected function getAkeneoPimConfig(): AbstractBundleConfig
    {
        return new AkeneoPimConfig();
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\AdapterFactoryInterface
     */
    protected function createAdapterFactoryMock(): AdapterFactoryInterface
    {
        $factory = $this->getMockBuilder(AdapterFactory::class)
            ->setMethods([
                'createProductApiAdapter',
                'createCategoryApiAdapter',
                'createAttributeApiAdapter',
                'createFamilyApiAdapter',
                'createFamilyVariantApiAdapter',
                'createAttributeOptionApiAdapter',
                'createProductModelApiAdapter',
            ])
            ->disableOriginalConstructor()
            ->getMock();

        $factory->method('createCategoryApiAdapter')->willReturn($this->createCategoryApiAdapterMock());
        $factory->method('createProductApiAdapter')->willReturn($this->createProductApiAdapterMock());
        $factory->method('createAttributeApiAdapter')->willReturn($this->createAttributeApiAdapterMock());
        $factory->method('createFamilyApiAdapter')->willReturn($this->createFamilyApiAdapterMock());
        $factory->method('createFamilyVariantApiAdapter')->willReturn($this->createFamilyVariantApiAdapterMock());
        $factory->method('createAttributeOptionApiAdapter')->willReturn($this->createAttributeOptionApiAdapterMock());
        $factory->method('createProductModelApiAdapter')->willReturn($this->createProductModelApiAdapterMock());

        return $factory;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    protected function createCategoryApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(CategoryApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::CATEGORY_DATA);

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    protected function createProductApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(ProductApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::PRODUCT_DATA);

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    protected function createAttributeApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(AttributeApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::ATTRIBUTE_DATA);

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    protected function createFamilyApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(FamilyApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::FAMILY_DATA);

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    protected function createFamilyVariantApiAdapterMock(): FamilyVariantApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(FamilyVariantApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::FAMILY_VARIANTS_DATA);

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    protected function createAttributeOptionApiAdapterMock(): AttributeOptionApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(AttributeOptionApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::ATTRIBUTE_OPTIONS_DATA);

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    protected function createProductModelApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(ProductModelApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn(static::PRODUCT_MODELS_DATA);

        return $adapter;
    }
}
