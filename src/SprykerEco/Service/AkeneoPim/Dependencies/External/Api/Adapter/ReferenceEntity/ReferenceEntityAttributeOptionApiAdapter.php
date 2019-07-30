<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class ReferenceEntityAttributeOptionApiAdapter implements ReferenceEntityAttributeOptionApiAdapterInterface
{
    /**
     * @var \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

    /**
     * @param \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface $akeneoPimClient
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimEnterpriseClientInterface $akeneoPimClient, WrapperFactoryInterface $wrapperFactory)
    {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @param string $referenceEntityCode Code of the reference entity
     * @param string $attributeCode Code of the attribute
     * @param string $attributeOptionCode Code of the attribute option
     *
     * @return array
     */
    public function get(string $referenceEntityCode, string $attributeCode, string $attributeOptionCode): array
    {
        return $this->akeneoPimClient
            ->getReferenceEntityAttributeOptionApi()
            ->get($referenceEntityCode, $attributeCode, $attributeOptionCode);
    }

    /**
     * @param string $referenceEntityCode Code of the reference entity
     * @param string $attributeCode Code of the attribute
     *
     * @return array
     */
    public function all(string $referenceEntityCode, string $attributeCode): array
    {
        return $this->akeneoPimClient
            ->getReferenceEntityAttributeOptionApi()
            ->all($referenceEntityCode, $attributeCode);
    }
}
