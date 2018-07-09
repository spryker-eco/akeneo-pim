<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

use Akeneo\Pim\ApiClient\Pagination\PageInterface;
use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;

class WrapperFactory implements WrapperFactoryInterface
{
    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\PageInterface $page
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function createAkeneoPage(PageInterface $page)
    {
        return new AkeneoResourcePage($page, $this);
    }

    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface $resourceCursor
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function createAkeneoResourceCursor(ResourceCursorInterface $resourceCursor)
    {
        return new AkeneoResourceCursor($resourceCursor);
    }
}
