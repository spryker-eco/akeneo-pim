<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use Psr\Http\Message\ResponseInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface;

class AssetReferenceFileApiAdapter implements AssetReferenceFileApiAdapterInterface
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
     * @param string $assetCode
     * @param string $localeCode
     *
     * @return array
     */
    public function getFromLocalizableAsset(string $assetCode, string $localeCode): array
    {
        return $this->akeneoPimClient
            ->getAssetReferenceFileApi()
            ->getFromLocalizableAsset($assetCode, $localeCode);
    }

    /**
     * @param string $assetCode
     *
     * @return array
     */
    public function getFromNotLocalizableAsset(string $assetCode): array
    {
        return $this->akeneoPimClient
            ->getAssetReferenceFileApi()
            ->getFromNotLocalizableAsset($assetCode);
    }

    /**
     * @param string $assetCode
     * @param string $localeCode
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function downloadFromLocalizableAsset(string $assetCode, string $localeCode): ResponseInterface
    {
        return $this->akeneoPimClient
            ->getAssetReferenceFileApi()
            ->downloadFromLocalizableAsset($assetCode, $localeCode);
    }

    /**
     * @param string $assetCode
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function downloadFromNotLocalizableAsset(string $assetCode): ResponseInterface
    {
        return $this->akeneoPimClient
            ->getAssetReferenceFileApi()
            ->downloadFromNotLocalizableAsset($assetCode);
    }
}
