<?php

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Psr\Http\Message\ResponseInterface;

interface ReferenceEntityMediaFileApiAdapterInterface
{
    /**
     * @param string $code
     *
     * @return ResponseInterface
     */
    public function download(string $code): ResponseInterface;
}
