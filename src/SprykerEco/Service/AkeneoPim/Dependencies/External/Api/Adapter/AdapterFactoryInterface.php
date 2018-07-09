<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

interface AdapterFactoryInterface
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCategoryApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeGroupApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    public function createAttributeOptionApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssociationTypeApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createChannelApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCurrencyApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createFamilyApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    public function createFamilyVariantApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createLocaleApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createMeasureFamilyApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductMediaFileApiAdapter();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductModelApiAdapter();
}
