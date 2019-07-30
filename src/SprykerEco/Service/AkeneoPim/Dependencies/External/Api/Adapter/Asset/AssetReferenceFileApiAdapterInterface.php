<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Asset;

use Psr\Http\Message\ResponseInterface;

interface AssetReferenceFileApiAdapterInterface
{
    /**
     * @param string $assetCode
     * @param string $localeCode
     *
     * @return array
     */
    public function getFromLocalizableAsset(string $assetCode, string $localeCode): array;

    /**
     * @param string $assetCode
     *
     * @return array
     */
    public function getFromNotLocalizableAsset(string $assetCode): array;

    /**
     * @param string $assetCode
     * @param string $localeCode
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function downloadFromLocalizableAsset(string $assetCode, string $localeCode): ResponseInterface;

    /**
     * @param string $assetCode
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function downloadFromNotLocalizableAsset(string $assetCode): ResponseInterface;
}
