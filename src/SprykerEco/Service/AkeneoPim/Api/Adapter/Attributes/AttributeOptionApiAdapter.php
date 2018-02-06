<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Api\Wrapper\WrapperFactoryInterface;

class AttributeOptionApiAdapter implements AttributeOptionApiAdapterInterface
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
     */
    public function get($attributeCode, $code)
    {
        return $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->get($attributeCode, $code);
    }

    /**
     * @inheritdoc
     */
    public function listPerPage($attributeCode, $limit = 10, $withCount = false, array $queryParameters = [])
    {
        $page = $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->listPerPage($attributeCode, $limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
     * @inheritdoc
     */
    public function all($attributeCode, $pageSize = 10, array $queryParameters = [])
    {
        $resourceCursor = $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->all($attributeCode, $pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
