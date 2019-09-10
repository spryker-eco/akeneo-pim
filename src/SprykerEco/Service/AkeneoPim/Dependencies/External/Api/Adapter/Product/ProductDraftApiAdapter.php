<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;

class ProductDraftApiAdapter implements ProductDraftApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @param \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface $akeneoPimClient
     */
    public function __construct(AkeneoPimEnterpriseClientInterface $akeneoPimClient)
    {
        $this->akeneoPimClient = $akeneoPimClient;
    }

    /**
     * {@inheritdoc}
     *
     * @param string $code Code of the resource
     *
     * @throws \Akeneo\Pim\ApiClient\Exception\HttpException If the request failed.
     *
     * @return array
     */
    public function get(string $code): array
    {
        return $this->akeneoPimClient
            ->getProductDraftApi()
            ->get($code);
    }
}
