<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter\Attributes;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;

class AttributeOptionApiAdapter implements AttributeOptionApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     */
    public function __construct(AkeneoPimClientInterface $akeneoPimClient)
    {
        $this->akeneoPimClient = $akeneoPimClient;
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
        return $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->listPerPage($attributeCode, $limit, $withCount, $queryParameters);
    }

    /**
     * @inheritdoc
     */
    public function all($attributeCode, $pageSize = 10, array $queryParameters = [])
    {
        return $this->akeneoPimClient
            ->getAttributeOptionApi()
            ->all($attributeCode, $pageSize, $queryParameters);
    }
}
