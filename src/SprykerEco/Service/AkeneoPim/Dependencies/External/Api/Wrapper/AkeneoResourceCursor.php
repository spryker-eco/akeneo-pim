<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

use Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface;

class AkeneoResourceCursor implements AkeneoResourceCursorInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface
     */
    private $resourceCursor;

    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\ResourceCursorInterface $resourceCursor
     */
    public function __construct(ResourceCursorInterface $resourceCursor)
    {
        $this->resourceCursor = $resourceCursor;
    }

    /**
     * {@inheritdoc}
     */
    public function getPageSize()
    {
        return $this->resourceCursor
            ->getPageSize();
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return $this->resourceCursor
            ->current();
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        $this->resourceCursor
            ->next();
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return $this->resourceCursor
            ->key();
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return $this->resourceCursor
            ->valid();
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        $this->resourceCursor
            ->rewind();
    }
}
