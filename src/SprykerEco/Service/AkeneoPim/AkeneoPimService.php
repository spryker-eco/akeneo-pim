<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim;

use Spryker\Service\Kernel\AbstractService;

/**
 * @method \SprykerEco\Service\AkeneoPim\AkeneoPimServiceFactory getFactory()
 */
class AkeneoPimService extends AbstractService implements AkeneoPimServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getAllProducts($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllCategories($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCategoryApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAttributes($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAttributeOptions($attributeCode, $pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeOptionApiAdapter()
            ->all($attributeCode, $pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAttributeGroups($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllChannels($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createChannelApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllCurrencies($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCurrencyApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllLocales($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createLocaleApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllFamilies($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllFamilyVariants($familyCode, $pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyVariantApiAdapter()
            ->all($familyCode, $pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllMeasureFamilies($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createMeasureFamilyApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAssociationTypes($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAssociationTypeApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllProductMediaFiles($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductMediaFileApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllProductModels($pageSize = 10, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductModelApiAdapter()
            ->all($pageSize, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeGroup($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOption($attributeCode, $code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeOptionApiAdapter()
            ->get($attributeCode, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCategoryApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getChannel($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createChannelApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrency($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCurrencyApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createLocaleApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getFamily($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilyVariant($familyCode, $code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyVariantApiAdapter()
            ->get($familyCode, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function getMeasureFamily($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createMeasureFamilyApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductMediaFile($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductMediaFileApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductModel($code)
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductModelApiAdapter()
            ->get($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeGroupsListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOptionsListPerPage($attributeCode, $limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeOptionApiAdapter()
            ->listPerPage($attributeCode, $limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoriesListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCategoryApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getChannelsListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createChannelApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrenciesListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createCurrencyApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getLocalesListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createAttributeGroupApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getFamiliesListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilyVariantsListPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createFamilyVariantApiAdapter()
            ->listPerPage($familyCode, $limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getMeasureFamilyListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createMeasureFamilyApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductMediaFilesListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductMediaFileApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductModelsListPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->getFactory()
            ->createAkeneoPimAdapterFactory()
            ->createProductModelApiAdapter()
            ->listPerPage($limit, $withCount, $queryParameters);
    }
}
