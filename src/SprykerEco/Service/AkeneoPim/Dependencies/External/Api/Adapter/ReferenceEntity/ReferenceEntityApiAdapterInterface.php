<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

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
     * @return \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface
     */
    public function all(array $queryParameters = []): ResourceCursorInterface;
}
