<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

interface ReferenceEntityAttributeOptionApiAdapterInterface
{
    /**
     * @param string $referenceEntityCode Code of the reference entity
     * @param string $attributeCode Code of the attribute
     * @param string $attributeOptionCode Code of the attribute option
     *
     * @return array
     */
    public function get(string $referenceEntityCode, string $attributeCode, string $attributeOptionCode): array;

    /**
     * @param string $referenceEntityCode Code of the reference entity
     * @param string $attributeCode Code of the attribute
     *
     * @return array
     */
    public function all(string $referenceEntityCode, string $attributeCode): array;
}
