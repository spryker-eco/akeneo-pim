<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset;

use Psr\Http\Message\ResponseInterface;

interface AssetVariationFileApiAdapterInterface
{
    /**
     * @param string $assetCode
     * @param string $channelCode
     * @param string $localeCode
     *
     * @return array
     */
    public function getFromLocalizableAsset(string $assetCode, string $channelCode, string $localeCode): array;

    /**
     * @param string $assetCode
     * @param string $channelCode
     *
     * @return array
     */
    public function getFromNotLocalizableAsset(string $assetCode, string $channelCode): array;

    /**
     * @param string $assetCode
     * @param string $channelCode
     * @param string $localeCode
     *
     * @return ResponseInterface
     */
    public function downloadFromLocalizableAsset(string $assetCode, string $channelCode, string $localeCode): ResponseInterface;

    /**
     * @param string $assetCode
     * @param string $channelCode
     *
     * @return ResponseInterface
     */
    public function downloadFromNotLocalizableAsset(string $assetCode, string $channelCode): ResponseInterface;
}
