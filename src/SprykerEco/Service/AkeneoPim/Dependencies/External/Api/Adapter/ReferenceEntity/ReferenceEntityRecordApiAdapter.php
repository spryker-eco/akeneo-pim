<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;
use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;

class ReferenceEntityRecordApiAdapter implements ReferenceEntityRecordApiAdapterInterface
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
     * @param string $recordCode
     *
     * @return array
     */
    public function get(string $referenceEntityCode, string $recordCode): array
    {
        return $this->akeneoPimClient
            ->getReferenceEntityRecordApi()
            ->get($referenceEntityCode, $recordCode);
    }

    /**
     * @param string $referenceEntityCode
     * @param array $queryParameters
     *
     * @return \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface
     */
    public function all(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface
    {
        return $this->akeneoPimClient
            ->getReferenceEntityRecordApi()
            ->all($referenceEntityCode, $queryParameters);
    }
}
