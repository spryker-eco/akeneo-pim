<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter\Family;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Api\Adapter\ApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Api\Wrapper\WrapperFactoryInterface;

class FamilyApiAdapter implements ApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Api\Wrapper\WrapperFactoryInterface
     */
    private $wrapperFactory;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     * @param \SprykerEco\Service\AkeneoPim\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimClientInterface $akeneoPimClient, WrapperFactoryInterface $wrapperFactory)
    {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @inheritdoc
     *
     * @param string $code Code of the resource
     *
     * @return array
     */
    public function get($code)
    {
        return $this->akeneoPimClient
            ->getFamilyApi()
            ->get($code);
    }

    /**
     * @inheritdoc
     *
     * @param int $limit The maximum number of resources to return.
     *                               Do note that the server has a maximum limit allowed.
     * @param bool $withCount Set to true to return the total count of resources.
     *                               This parameter could decrease drastically the performance when set to true.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function listPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        $page = $this->akeneoPimClient
            ->getFamilyApi()
            ->listPerPage($limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
     * @inheritdoc
     *
     * @param int $pageSize The size of the page returned by the server.
     *                               Do note that the server has a maximum limit allowed.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function all($pageSize = 10, array $queryParameters = [])
    {
        $resourceCursor = $this->akeneoPimClient
            ->getFamilyApi()
            ->all($pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
