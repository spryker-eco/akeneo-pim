<?php


namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;
use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class ReferenceEntityApiAdapter implements ReferenceEntityApiAdapterInterface
{
    /**
     * @var \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface
     */
    protected $akeneoPimClient;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    private $wrapperFactory;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $akeneoPimClient
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(AkeneoPimEnterpriseClientInterface $akeneoPimClient, WrapperFactoryInterface $wrapperFactory)
    {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->wrapperFactory = $wrapperFactory;
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
     * @return ResourceCursorInterface
     */
    public function all(array $queryParameters = []): ResourceCursorInterface
    {
        return $this->akeneoPimClient
            ->getReferenceEntityApi()
            ->all($queryParameters);
    }
}
