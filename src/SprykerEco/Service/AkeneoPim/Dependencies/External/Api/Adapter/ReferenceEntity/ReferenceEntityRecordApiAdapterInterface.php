<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;

interface ReferenceEntityRecordApiAdapterInterface
{
    /**
     * @param string $referenceEntityCode
     * @param string $recordCode
     *
     * @return array
     */
    public function get(string $referenceEntityCode, string $recordCode): array;

    /**
     * @param string $referenceEntityCode
     * @param array $queryParameters
     *
     * @return ResourceCursorInterface
     */
    public function all(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface;
}
