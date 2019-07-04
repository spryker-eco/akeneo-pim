<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use Psr\Http\Message\ResponseInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class AssetVariationFileApiAdapter implements AssetVariationFileApiAdapterInterface
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
     * @param string $assetCode
     * @param string $channelCode
     * @param string $localeCode
     *
     * @return array
     */
    public function getFromLocalizableAsset(string $assetCode, string $channelCode, string $localeCode): array
    {
        return $this->akeneoPimClient
            ->getAssetVariationFileApi()
            ->getFromLocalizableAsset($assetCode, $channelCode, $localeCode);
    }

    /**
     * @param string $assetCode
     * @param string $channelCode
     *
     * @return array
     */
    public function getFromNotLocalizableAsset(string $assetCode, string $channelCode): array
    {
        return $this->akeneoPimClient
            ->getAssetVariationFileApi()
            ->getFromNotLocalizableAsset($assetCode, $channelCode);
    }

    /**
     * @param string $assetCode
     * @param string $channelCode
     * @param string $localeCode
     *
     * @return ResponseInterface
     */
    public function downloadFromLocalizableAsset(string $assetCode, string $channelCode, string $localeCode): ResponseInterface
    {
        return $this->akeneoPimClient
            ->getAssetVariationFileApi()
            ->downloadFromLocalizableAsset($assetCode, $channelCode, $localeCode);
    }

    /**
     * @param string $assetCode
     * @param string $channelCode
     *
     * @return ResponseInterface
     */
    public function downloadFromNotLocalizableAsset(string $assetCode, string $channelCode): ResponseInterface
    {
        return $this->akeneoPimClient
            ->getAssetVariationFileApi()
            ->downloadFromNotLocalizableAsset($assetCode, $channelCode);
    }
}
