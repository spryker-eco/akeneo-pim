<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim;

use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;

interface AkeneoPimServiceInterface
{
    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of products.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllProducts($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of categories.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllCategories($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of attributes.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAttributes($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of attributes.
     *
     * @api
     *
     * @param string $attributeCode Code of the attribute
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAttributeOptions($attributeCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of attribute groups.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAttributeGroups($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of channels.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllChannels($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of currencies.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllCurrencies($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of locales.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllLocales($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of families.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllFamilies($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of family variants.
     *
     * @api
     *
     * @param string $familyCode Family code from which you want to get a list of family variants.
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllFamilyVariants($familyCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of measure families.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllMeasureFamilies($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of association types.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAssociationTypes($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of product media files.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllProductMediaFiles($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of product models.
     *
     * @api
     *
     * @param int $pageSize The size of the page returned by the server.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllProductModels($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets a attribute by its code
     *
     * @api
     *
     * @param string $code Code of the attribute
     *
     * @return array
     */
    public function getAttribute($code): array;

    /**
     * Specification:
     *  - Gets a attribute group by its code
     *
     * @api
     *
     * @param string $code Code of the attribute group
     *
     * @return array
     */
    public function getAttributeGroup($code): array;

    /**
     * Specification:
     *  - Gets a attribute option group by its code
     *
     * @api
     *
     * @param string $attributeCode Code of the attribute
     * @param string $code Code of the attribute option
     *
     * @return array
     */
    public function getAttributeOption($attributeCode, $code): array;

    /**
     * Specification:
     *  - Gets a category by its code
     *
     * @api
     *
     * @param string $code Code of the category
     *
     * @return array
     */
    public function getCategory($code): array;

    /**
     * Specification:
     *  - Gets a channel by its code
     *
     * @api
     *
     * @param string $code Code of the channel
     *
     * @return array
     */
    public function getChannel($code): array;

    /**
     * Specification:
     *  - Gets a currency by its code
     *
     * @api
     *
     * @param string $code Code of the currency
     *
     * @return array
     */
    public function getCurrency($code): array;

    /**
     * Specification:
     *  - Gets a locale by its code
     *
     * @api
     *
     * @param string $code Code of the locale
     *
     * @return array
     */
    public function getLocale($code): array;

    /**
     * Specification:
     *  - Gets a family by its code
     *
     * @api
     *
     * @param string $code Code of the family
     *
     * @return array
     */
    public function getFamily($code): array;

    /**
     * Specification:
     *  - Gets a family variant by its code
     *
     * @api
     *
     * @param string $familyCode Code of the family
     * @param string $code Code of the family variant
     *
     * @return array
     */
    public function getFamilyVariant($familyCode, $code): array;

    /**
     * Specification:
     *  - Gets a measure family by its code
     *
     * @api
     *
     * @param string $code Code of the measure family
     *
     * @return array
     */
    public function getMeasureFamily($code): array;

    /**
     * Specification:
     *  - Gets a product by its code
     *
     * @api
     *
     * @param string $code Code of the product
     *
     * @return array
     */
    public function getProduct($code): array;

    /**
     * Specification:
     *  - Gets a product media file by its code
     *
     * @api
     *
     * @param string $code Code of the product media file
     *
     * @return array
     */
    public function getProductMediaFile($code): array;

    /**
     * Specification:
     *  - Gets a product model by its code
     *
     * @api
     *
     * @param string $code Code of the product model
     *
     * @return array
     */
    public function getProductModel($code): array;

    /**
     * Specification:
     *  - Gets a list of attributes by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of attributes to return.
     * @param bool $withCount Set to true to return the total count of attributes.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAttributesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of attribute groups by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of attribute groups to return.
     * @param bool $withCount Set to true to return the total count of attribute groups.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAttributeGroupsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of attribute options by returning the first page.
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
    public function getAttributeOptionsListPerPage($attributeCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of categories by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of categories to return.
     * @param bool $withCount Set to true to return the total count of categories.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getCategoriesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of channels by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of channels to return.
     * @param bool $withCount Set to true to return the total count of channels.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getChannelsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of currencies by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of currencies to return.
     * @param bool $withCount Set to true to return the total count of currencies.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getCurrenciesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of locales by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of locales to return.
     * @param bool $withCount Set to true to return the total count of locales.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getLocalesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of families by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of families to return.
     * @param bool $withCount Set to true to return the total count of families.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getFamiliesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of family variants by returning the first page.
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
    public function getFamilyVariantsListPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of measure families by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of measure families to return.
     * @param bool $withCount Set to true to return the total count of measure families.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getMeasureFamilyListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of products by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of products to return.
     * @param bool $withCount Set to true to return the total count of products.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getProductsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of product media files by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of product media files to return.
     * @param bool $withCount Set to true to return the total count of product media files.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getProductMediaFilesListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a list of product models by returning the first page.
     *
     * @api
     *
     * @param int $limit The maximum number of product models to return.
     * @param bool $withCount Set to true to return the total count of product models.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getProductModelsListPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Specification:
     *  - Gets a cursor to iterate over a list of assets.
     *
     * @api
     *
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function getAllAssets(int $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;

    /**
     * Specification:
     *  - Gets an asset by its code
     *
     * @api
     *
     * @param string $code
     *
     * @return array
     */
    public function getAsset(string $code): array;

    /**
     * Specification:
     *  - Gets a list of assets by returning the first page.
     *
     * @api
     *
     * @param int $limit
     * @param bool $withCount
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getAssetListPerPage(int $limit = 10, bool $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;}
