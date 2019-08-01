<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

interface ReferenceEntityAttributeOptionApiAdapterInterface
{
    /**
     * @param string $referenceEntityCode
     * @param string $attributeCode
     * @param string $attributeOptionCode
     *
     * @return array
     */
    public function get(string $referenceEntityCode, string $attributeCode, string $attributeOptionCode): array;

    /**
     * @param string $referenceEntityCode
     * @param string $attributeCode
     *
     * @return array
     */
    public function all(string $referenceEntityCode, string $attributeCode): array;
}
