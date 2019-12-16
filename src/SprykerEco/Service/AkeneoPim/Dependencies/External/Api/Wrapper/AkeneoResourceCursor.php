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
     * {@inheritDoc}
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->resourceCursor
            ->getPageSize();
    }

    /**
     * {@inheritDoc}
     *
     * @return mixed
     */
    public function current()
    {
        return $this->resourceCursor
            ->current();
    }

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function next(): void
    {
        $this->resourceCursor
            ->next();
    }

    /**
     * {@inheritDoc}
     *
     * @return mixed
     */
    public function key()
    {
        return $this->resourceCursor
            ->key();
    }

    /**
     * {@inheritDoc}
     *
     * @return bool
     */
    public function valid(): bool
    {
        return $this->resourceCursor
            ->valid();
    }

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function rewind(): void
    {
        $this->resourceCursor
            ->rewind();
    }
}
