<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;

interface ReferenceEntityAttributeApiAdapterInterface
{
    /**
     * @param string $referenceEntityCode
     * @param string $attributeCode
     *
     * @return array
     */
    public function get(string $referenceEntityCode, string $attributeCode): array;

    /**
     * @param string $referenceEntityCode
     * @param array $queryParameters
     *
     * @return ResourceCursorInterface
     */
    public function all(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface;
}
