<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;

interface ReferenceEntityApiAdapterInterface
{
    /**
     * @param string $referenceEntityCode
     *
     * @return array
     */
    public function get(string $referenceEntityCode): array;

    /**
     * @param array $queryParameters
     *
     * @return ResourceCursorInterface
     */
    public function all(array $queryParameters = []): ResourceCursorInterface;
}
