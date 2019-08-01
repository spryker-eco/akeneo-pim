<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface;
use Psr\Http\Message\ResponseInterface;

class ReferenceEntityMediaFileApiAdapter implements ReferenceEntityMediaFileApiAdapterInterface
{
    /**
     * @var \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientInterface
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
     * @param string $code
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function download(string $code): ResponseInterface
    {
        return $this->akeneoPimClient
            ->getReferenceEntityMediaFileApi()
            ->download($code);
    }
}
