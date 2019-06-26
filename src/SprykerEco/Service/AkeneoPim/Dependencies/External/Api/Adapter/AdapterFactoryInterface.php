<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityApiAdapterInterface;

interface AdapterFactoryInterface
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCategoryApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAttributeGroupApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface
     */
    public function createAttributeOptionApiAdapter(): AttributeOptionApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssociationTypeApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createChannelApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createCurrencyApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createFamilyApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface
     */
    public function createFamilyVariantApiAdapter(): FamilyVariantApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createLocaleApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createMeasureFamilyApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductMediaFileApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createProductModelApiAdapter(): ApiAdapterInterface;

    /**
     * @return ApiAdapterInterface
     */
    public function createAssetApiAdapter(): ApiAdapterInterface;

    /**
     * @return ApiAdapterInterface
     */
    public function createAssetTagApiAdapter(): ApiAdapterInterface;

    /**
     * @return ApiAdapterInterface
     */
    public function createAssetCategoryApiAdapter(): ApiAdapterInterface;

    /**
     * @return ReferenceEntityApiAdapterInterface
     */
    public function createReferenceEntityApiAdapter(): ReferenceEntityApiAdapterInterface;
}
