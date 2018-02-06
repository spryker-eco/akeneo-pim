<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Adapter\Family;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;

class FamilyVariantApiAdapter implements FamilyVariantApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     */
    public function __construct(AkeneoPimClientInterface $akeneoPimClient)
    {
        $this->akeneoPimClient = $akeneoPimClient;
    }

    /**
     * @inheritdoc
     */
    public function get($familyCode, $familyVariantCode)
    {
        return $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->get($familyCode, $familyVariantCode);
    }

    /**
     * @inheritdoc
     */
    public function listPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = [])
    {
        return $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->listPerPage($familyCode, $limit, $withCount, $queryParameters);
    }

    /**
     * @inheritdoc
     */
    public function all($familyCode, $pageSize = 10, array $queryParameters = [])
    {
        return $this->akeneoPimClient
            ->getFamilyVariantApi()
            ->all($familyCode, $pageSize, $queryParameters);
    }
}
