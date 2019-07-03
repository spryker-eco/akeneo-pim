<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Attributes;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class AttributeOptionApiAdapter implements AttributeOptionApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

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
     * @param string $code Code of the resource
     *
     * @return array
     */
    public function get($attributeCode, $code): array
    {
        return $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->get($attributeCode, $code);
    }

    /**
     * {@inheritdoc}
     *
     * @param string $attributeCode
     * @param int $limit
     * @param bool $withCount
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function listPerPage($attributeCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface
    {
        $page = $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->listPerPage($attributeCode, $limit, $withCount, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoPage($page);
    }

    /**
     * {@inheritdoc}
     *
     * @param string $attributeCode
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function all($attributeCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface
    {
        $resourceCursor = $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->all($attributeCode, $pageSize, $queryParameters);

        return $this->wrapperFactory
            ->createAkeneoResourceCursor($resourceCursor);
    }
}
