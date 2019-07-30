<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\ReferenceEntity;

use Psr\Http\Message\ResponseInterface;

interface ReferenceEntityMediaFileApiAdapterInterface
{
    /**
     * @param string $code
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function download(string $code): ResponseInterface;
}
