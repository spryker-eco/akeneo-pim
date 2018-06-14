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
use SprykerEco\Service\AkeneoPim\Api\Adapter\Category\CategoryApiAdapter;
use SprykerEco\Service\AkeneoPim\Api\Adapter\Product\ProductApiAdapter;

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
            ->setMethods(['createProductApiAdapter', 'createCategoryApiAdapter'])
            ->disableOriginalConstructor()
            ->getMock();

        $factory->method('createCategoryApiAdapter')->willReturn($this->createCategoryApiAdapterMock());
        $factory->method('createProductApiAdapter')->willReturn($this->createProductApiAdapterMock());

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
}
