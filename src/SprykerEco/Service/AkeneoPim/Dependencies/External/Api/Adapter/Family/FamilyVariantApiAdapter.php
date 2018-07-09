<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;

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
     * {@inheritdoc}
     *
     * @param string $familyCode Code of the parent family
     * @param string $familyVariantCode Code of the family variant
     *
     * @return array
     */
    public function get($familyCode, $familyVariantCode): array
    {
        return $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->get($familyCode, $familyVariantCode);
    }

    /**
     * {@inheritdoc}
     *
     * @param int $limit The maximum number of resources to return.
     *                               Do note that the server has a maximum limit allowed.
     * @param bool $withCount Set to true to return the total count of resources.
     *                               This parameter could decrease drastically the performance when set to true.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function listPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        $page = $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->listPerPage($familyCode, $limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
     * {@inheritdoc}
     *
     * @param int $pageSize The size of the page returned by the server.
     *                               Do note that the server has a maximum limit allowed.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function all($familyCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        $resourceCursor = $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->all($familyCode, $pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
