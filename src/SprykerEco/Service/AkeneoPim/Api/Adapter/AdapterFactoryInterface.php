<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter;

interface AdapterFactoryInterface
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createProductApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createCategoryApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeGroupApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    public function createAttributeOptionApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createAssociationTypeApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createChannelApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createCurrencyApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createFamilyApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    public function createFamilyVariantApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createLocaleApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createMeasureFamilyApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createProductMediaFileApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface
     */
    public function createProductModelApiAdapter();
}
