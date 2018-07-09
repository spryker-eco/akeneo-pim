<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class FamilyVariantApiAdapter implements FamilyVariantApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    private $wrapperFactory;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimClientInterface $akeneoPimClient, WrapperFactoryInterface $wrapperFactory)
    {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
<<<<<<< Updated upstream:src/SprykerEco/Service/AkeneoPim/Api/Adapter/Family/FamilyVariantApiAdapter.php
     * @inheritdoc
     *
     * @param string $familyCode Code of the parent family
     * @param string $familyVariantCode Code of the family variant
     *
     * @return array
=======
     * {@inheritdoc}
>>>>>>> Stashed changes:src/SprykerEco/Service/AkeneoPim/Dependencies/External/Api/Adapter/Family/FamilyVariantApiAdapter.php
     */
    public function get($familyCode, $familyVariantCode)
    {
        return $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->get($familyCode, $familyVariantCode);
    }

    /**
<<<<<<< Updated upstream:src/SprykerEco/Service/AkeneoPim/Api/Adapter/Family/FamilyVariantApiAdapter.php
     * @inheritdoc
     *
     * @param int $limit The maximum number of resources to return.
     *                               Do note that the server has a maximum limit allowed.
     * @param bool $withCount Set to true to return the total count of resources.
     *                               This parameter could decrease drastically the performance when set to true.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourcePageInterface
=======
     * {@inheritdoc}
>>>>>>> Stashed changes:src/SprykerEco/Service/AkeneoPim/Dependencies/External/Api/Adapter/Family/FamilyVariantApiAdapter.php
     */
    public function listPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = [])
    {
        $page = $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->listPerPage($familyCode, $limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
<<<<<<< Updated upstream:src/SprykerEco/Service/AkeneoPim/Api/Adapter/Family/FamilyVariantApiAdapter.php
     * @inheritdoc
     *
     * @param int $pageSize The size of the page returned by the server.
     *                               Do note that the server has a maximum limit allowed.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourceCursorInterface
=======
     * {@inheritdoc}
>>>>>>> Stashed changes:src/SprykerEco/Service/AkeneoPim/Dependencies/External/Api/Adapter/Family/FamilyVariantApiAdapter.php
     */
    public function all($familyCode, $pageSize = 10, array $queryParameters = [])
    {
        $resourceCursor = $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->all($familyCode, $pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
