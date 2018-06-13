<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Wrapper;

use Akeneo\Pim\ApiClient\Pagination\PageInterface;
use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;

interface WrapperFactoryInterface
{
    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\PageInterface $page
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function createAkeneoPage(PageInterface $page);

    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface $resourceCursor
     *
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function createAkeneoResourceCursor(ResourceCursorInterface $resourceCursor);
}
