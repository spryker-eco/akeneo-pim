<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;
use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;

class ReferenceEntityApiAdapter implements ReferenceEntityApiAdapterInterface
{
    /**
     * @var \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     */
    public function __construct(AkeneoPimEnterpriseClientInterface $akeneoPimClient)
    {
        $this->akeneoPimClient = $akeneoPimClient;
    }

    /**
     * @param string $referenceEntityCode
     *
     * @return array
     */
    public function get(string $referenceEntityCode): array
    {
        return $this->akeneoPimClient
            ->getReferenceEntityApi()
            ->get($referenceEntityCode);
    }

    /**
     * @param array $queryParameters
     *
     * @return \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface
     */
    public function all(array $queryParameters = []): ResourceCursorInterface
    {
        return $this->akeneoPimClient
            ->getReferenceEntityApi()
            ->all($queryParameters);
    }
}
