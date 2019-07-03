<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Product;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class ProductModelDraftApiAdapter implements ProductModelDraftApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

    /**
     * @param AkeneoPimEnterpriseClientInterface $akeneoPimClient
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimEnterpriseClientInterface $akeneoPimClient, WrapperFactoryInterface $wrapperFactory)
    {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @param string $code
     *
     * @return array
     */
    public function get($code): array
    {
        return $this->akeneoPimClient
            ->getProductModelDraftApi()
            ->get($code);
    }
}
