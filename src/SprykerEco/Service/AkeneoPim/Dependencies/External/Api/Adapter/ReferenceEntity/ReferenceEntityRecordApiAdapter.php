<?php


namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;
use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class ReferenceEntityRecordApiAdapter implements ReferenceEntityRecordApiAdapterInterface
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
     * @return ResourceCursorInterface
     */
    public function all(string $referenceEntityCode, array $queryParameters = []): ResourceCursorInterface
    {
        return $this->akeneoPimClient
            ->getReferenceEntityRecordApi()
            ->all($referenceEntityCode, $queryParameters);
    }
}
