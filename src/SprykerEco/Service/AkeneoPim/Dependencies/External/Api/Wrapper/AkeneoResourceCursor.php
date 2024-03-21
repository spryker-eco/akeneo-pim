<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
