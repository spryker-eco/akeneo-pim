<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;
use Spryker\Service\Kernel\AbstractService;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;

/**
 * @method \SprykerEco\Service\AkeneoPim\AkeneoPimServiceFactory getFactory()
 */
class AkeneoPimService extends AbstractService implements AkeneoPimServiceInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllProducts($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllCategories($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCategoryApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAttributes($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $attributeCode Code of the attribute
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAttributeOptions($attributeCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeOptionApiAdapter()
            ->all($attributeCode, $pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAttributeGroups($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllChannels($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createChannelApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllCurrencies($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCurrencyApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllLocales($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createLocaleApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllFamilies($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $familyCode Family code from which you want to get a list of family variants.
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllFamilyVariants($familyCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyVariantApiAdapter()
            ->all($familyCode, $pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllMeasureFamilies($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createMeasureFamilyApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAssociationTypes($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssociationTypeApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllProductMediaFiles($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductMediaFileApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllProductModels($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductModelApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the attribute
     *
     * @return array
     */
    public function getAttribute($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the attribute group
     *
     * @return array
     */
    public function getAttributeGroup($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $attributeCode Code of the attribute
     * @param string $code Code of the attribute option
     *
     * @return array
     */
    public function getAttributeOption($attributeCode, $code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeOptionApiAdapter()
            ->get($attributeCode, $code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the category
     *
     * @return array
     */
    public function getCategory($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCategoryApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the channel
     *
     * @return array
     */
    public function getChannel($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createChannelApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the currency
     *
     * @return array
     */
    public function getCurrency($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCurrencyApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the locale
     *
     * @return array
     */
    public function getLocale($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createLocaleApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the family
     *
     * @return array
     */
    public function getFamily($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $familyCode Code of the family
     * @param string $code Code of the family variant
     *
     * @return array
     */
    public function getFamilyVariant($familyCode, $code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyVariantApiAdapter()
            ->get($familyCode, $code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the measure family
     *
     * @return array
     */
    public function getMeasureFamily($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createMeasureFamilyApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the product
     *
     * @return array
     */
    public function getProduct($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the product media file
     *
     * @return array
     */
    public function getProductMediaFile($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductMediaFileApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code Code of the product model
     *
     * @return array
     */
    public function getProductModel($code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductModelApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of attributes to return.
     * @param bool $withCount Set to true to return the total count of attributes.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAttributesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of attribute groups to return.
     * @param bool $withCount Set to true to return the total count of attribute groups.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAttributeGroupsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $attributeCode Code of the attribute
     * @param int $limit The maximum number of resources to return.
     * @param bool $withCount Set to true to return the total count of resources.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAttributeOptionsListPerPage($attributeCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeOptionApiAdapter()
            ->listPerPage($attributeCode, $limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of categories to return.
     * @param bool $withCount Set to true to return the total count of categories.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getCategoriesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCategoryApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of channels to return.
     * @param bool $withCount Set to true to return the total count of channels.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getChannelsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createChannelApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of currencies to return.
     * @param bool $withCount Set to true to return the total count of currencies.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getCurrenciesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCurrencyApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of locales to return.
     * @param bool $withCount Set to true to return the total count of locales.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getLocalesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of families to return.
     * @param bool $withCount Set to true to return the total count of families.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getFamiliesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $familyCode Family code from which you want to get a list of family variants.
     * @param int $limit The maximum number of family variants to return.
     * @param bool $withCount Set to true to return the total count of family variants.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getFamilyVariantsListPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyVariantApiAdapter()
            ->listPerPage($familyCode, $limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of measure families to return.
     * @param bool $withCount Set to true to return the total count of measure families.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getMeasureFamilyListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createMeasureFamilyApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of products to return.
     * @param bool $withCount Set to true to return the total count of products.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getProductsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of product media files to return.
     * @param bool $withCount Set to true to return the total count of product media files.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getProductMediaFilesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductMediaFileApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit The maximum number of product models to return.
     * @param bool $withCount Set to true to return the total count of product models.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getProductModelsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductModelApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     *
     */
    public function getAllAssets(int $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code
     *
     * @return array

     */
    public function getAsset(string $code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit
     * @param bool $withCount
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAssetsListPerPage(int $limit = 10, bool $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAssetTags(int $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetTagApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code
     *
     * @return array
     */
    public function getAssetTag(string $code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetTagApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit
     * @param bool $withCount
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAssetTagsListPerPage(int $limit = 10, bool $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetTagApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     * @api
     *
     */
    public function getAllAssetCategories(int $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetCategoryApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code
     *
     * @return array
     */
    public function getAssetCategory(string $code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetCategoryApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $limit
     * @param bool $withCount
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAssetCategoriesListPerPage(int $limit = 10, bool $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssetCategoryApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $code
     *
     * @return array
     */
    public function getReferenceEntity(string $code): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createReferenceEntityApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param array $queryParameters
     *
     * @return ResourceCursorInterface
     */
    public function getAllReferenceEntities(array $queryParameters = []): ResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createReferenceEntityApiAdapter()
            ->all($queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $referenceEntityCode
     * @param string $recordCode
     *
     * @return array
     */
    public function getReferenceEntityRecord(string $referenceEntityCode, string $recordCode): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createReferenceEntityRecordApiAdapter()
            ->get($referenceEntityCode, $recordCode);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $referenceEntityCode
     * @param array $queryParameters
     *
     * @return ResourceCursorInterface
     */
    public function getReferenceEntityRecords(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createReferenceEntityRecordApiAdapter()
            ->all($referenceEntityCode, $queryParameters);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $referenceEntityCode
     * @param string $attributeCode
     *
     * @return array
     */
    public function getReferenceEntityAttribute(string $referenceEntityCode, string $attributeCode): array
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createReferenceEntityAttributeApiAdapter()
            ->get($referenceEntityCode, $attributeCode);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $referenceEntityCode
     * @param array $queryParameters
     *
     * @return ResourceCursorInterface
     */
    public function getReferenceEntityAttributes(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createReferenceEntityAttributeApiAdapter()
            ->all($referenceEntityCode, $queryParameters);
    }
}
