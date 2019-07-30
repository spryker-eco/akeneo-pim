<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

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
     * @return \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface
     */
    public function all(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface;
}
