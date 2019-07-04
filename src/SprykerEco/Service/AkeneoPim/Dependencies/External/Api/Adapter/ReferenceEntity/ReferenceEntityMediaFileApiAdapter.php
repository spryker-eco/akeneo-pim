<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use Psr\Http\Message\ResponseInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class ReferenceEntityMediaFileApiAdapter implements ReferenceEntityMediaFileApiAdapterInterface
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
     * @return ResponseInterface
     */
    public function download(string $code): ResponseInterface
    {
        return $this->akeneoPimClient
            ->getReferenceEntityMediaFileApi()
            ->download($code);
    }
}
