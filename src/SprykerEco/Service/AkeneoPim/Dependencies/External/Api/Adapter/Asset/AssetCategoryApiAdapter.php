<?php


namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class AssetCategoryApiAdapter implements ApiAdapterInterface
{
    /**
     * @var \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

    /**
     * @param AkeneoPimEnterpriseClientInterface $akeneoPimClient
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimEnterpriseClientInterface $akeneoPimClient, WrapperFactoryInterface $wrapperFactory)
    {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @param string $code
     *
     * @return array
     */
    public function get($code): array
    {
        return $this->akeneoPimClient
            ->getAssetCategoryApi()
            ->get($code);
    }

    /**
     * @param int $limit
     * @param bool $withCount
     * @param array $queryParameters
     *
     * @return AkeneoResourcePageInterface
     */
    public function listPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        $page = $this->akeneoPimClient
            ->getAssetCategoryApi()
            ->listPerPage($limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return AkeneoResourceCursorInterface
     */
    public function all($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        $resourceCursor = $this->akeneoPimClient
            ->getAssetCategoryApi()
            ->all($pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
