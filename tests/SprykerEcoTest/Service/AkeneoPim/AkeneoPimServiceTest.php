<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEcoTest\Service\AkeneoPim;

use Codeception\Test\Unit;
use Spryker\Service\Kernel\AbstractBundleConfig;
use SprykerEco\Service\AkeneoPim\AkeneoPimConfig;
use SprykerEco\Service\AkeneoPim\AkeneoPimService;
use SprykerEco\Service\AkeneoPim\AkeneoPimServiceFactory;
use SprykerEco\Service\AkeneoPim\AkeneoPimServiceInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactory;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactoryInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Category\CategoryApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductModelApiAdapter;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;

/**
 * @group SprykerEcoTest
 * @group Service
 * @group AkeneoPim
 * @group AkeneoPimServiceTest
 */
class AkeneoPimServiceTest extends Unit
{
    /**
     * @return void
     */
    public function testGetAllProducts()
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllProducts() instanceof AkeneoResourceCursorInterface);
    }

    /**
     * @return void
     */
    public function testGetAllCategories(): void
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllCategories() instanceof AkeneoResourceCursorInterface);
    }

    /**
     * @return void
     */
    public function testGetAllAttributes(): void
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllAttributes() instanceof AkeneoResourceCursorInterface);
    }

    /**
     * @return void
     */
    public function testGetAllFamilies(): void
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllFamilies() instanceof AkeneoResourceCursorInterface);
    }

    /**
     * @return void
     */
    public function testGetFamilyVariants(): void
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllFamilyVariants('code') instanceof AkeneoResourceCursorInterface);
    }

    /**
     * @return void
     */
    public function testGetAllAttributeOptions(): void
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllAttributeOptions('code') instanceof AkeneoResourceCursorInterface);
    }

    /**
     * @return void
     */
    public function testGetAllProductModels(): void
    {
        $service = $this->prepareService();

        $this->assertTrue($service->getAllProductModels() instanceof AkeneoResourceCursorInterface);
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
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\AdapterFactoryInterface
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
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    protected function createCategoryApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(CategoryApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    protected function createProductApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(ProductApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    protected function createAttributeApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(AttributeApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    protected function createFamilyApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(FamilyApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    protected function createFamilyVariantApiAdapterMock(): FamilyVariantApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(FamilyVariantApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    protected function createAttributeOptionApiAdapterMock(): AttributeOptionApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(AttributeOptionApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    protected function createProductModelApiAdapterMock(): ApiAdapterInterface
    {
        $adapter = $this->getMockBuilder(ProductModelApiAdapter::class)
            ->disableOriginalConstructor()
            ->setMethods(['all'])
            ->getMock();

        $adapter->method('all')->willReturn($this->createAkeneoResourceMock());

        return $adapter;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    protected function createAkeneoResourceMock(): AkeneoResourceCursorInterface
    {
        $mock = $this->getMockBuilder(AkeneoResourceCursorInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $mock;
    }
}
