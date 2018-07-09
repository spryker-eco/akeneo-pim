<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ApiAdapterInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class AttributeGroupApiAdapter implements ApiAdapterInterface
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
<<<<<<< Updated upstream:src/SprykerEco/Service/AkeneoPim/Api/Adapter/Attributes/AttributeGroupApiAdapter.php
     * @inheritdoc
     *
     * @param string $code Code of the resource
     *
     * @return array
=======
     * {@inheritdoc}
>>>>>>> Stashed changes:src/SprykerEco/Service/AkeneoPim/Dependencies/External/Api/Adapter/Attributes/AttributeGroupApiAdapter.php
     */
    public function get($code)
    {
        return $this->akeneoPimClient
            ->getAttributeGroupApi()
            ->get($code);
    }

    /**
<<<<<<< Updated upstream:src/SprykerEco/Service/AkeneoPim/Api/Adapter/Attributes/AttributeGroupApiAdapter.php
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
>>>>>>> Stashed changes:src/SprykerEco/Service/AkeneoPim/Dependencies/External/Api/Adapter/Attributes/AttributeGroupApiAdapter.php
     */
    public function listPerPage($limit = 10, $withCount = false, array $queryParameters = [])
    {
        $page = $this->akeneoPimClient
            ->getAttributeGroupApi()
            ->listPerPage($limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
<<<<<<< Updated upstream:src/SprykerEco/Service/AkeneoPim/Api/Adapter/Attributes/AttributeGroupApiAdapter.php
     * @inheritdoc
     *
     * @param int $pageSize The size of the page returned by the server.
     *                               Do note that the server has a maximum limit allowed.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourceCursorInterface
=======
     * {@inheritdoc}
>>>>>>> Stashed changes:src/SprykerEco/Service/AkeneoPim/Dependencies/External/Api/Adapter/Attributes/AttributeGroupApiAdapter.php
     */
    public function all($pageSize = 10, array $queryParameters = [])
    {
        $resourceCursor = $this->akeneoPimClient
            ->getAttributeGroupApi()
            ->all($pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
