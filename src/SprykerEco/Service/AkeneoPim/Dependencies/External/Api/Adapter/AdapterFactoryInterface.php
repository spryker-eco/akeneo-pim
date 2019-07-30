<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset\AssetReferenceFileApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset\AssetVariationFileApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes\AttributeOptionApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family\FamilyVariantApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductDraftApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductModelDraftApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityAttributeApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityAttributeOptionApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityMediaFileApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityRecordApiAdapterInterface;

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
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductModelDraftApiAdapterInterface
     */
    public function createProductModelDraftApiAdapter(): ProductModelDraftApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product\ProductDraftApiAdapterInterface
     */
    public function createProductDraftApiAdapter(): ProductDraftApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createPublishedProductApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssetApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssetTagApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface
     */
    public function createAssetCategoryApiAdapter(): ApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityApiAdapterInterface
     */
    public function createReferenceEntityApiAdapter(): ReferenceEntityApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityRecordApiAdapterInterface
     */
    public function createReferenceEntityRecordApiAdapter(): ReferenceEntityRecordApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityAttributeApiAdapterInterface
     */
    public function createReferenceEntityAttributeApiAdapter(): ReferenceEntityAttributeApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityAttributeOptionApiAdapterInterface
     */
    public function createReferenceEntityAttributeOptionApiAdapter(): ReferenceEntityAttributeOptionApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity\ReferenceEntityMediaFileApiAdapterInterface
     */
    public function createReferenceEntityMediaFileApiAdapter(): ReferenceEntityMediaFileApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset\AssetReferenceFileApiAdapterInterface
     */
    public function createAssetReferenceFileApiAdapter(): AssetReferenceFileApiAdapterInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset\AssetVariationFileApiAdapterInterface
     */
    public function createAssetVariationFileApiAdapter(): AssetVariationFileApiAdapterInterface;
}
