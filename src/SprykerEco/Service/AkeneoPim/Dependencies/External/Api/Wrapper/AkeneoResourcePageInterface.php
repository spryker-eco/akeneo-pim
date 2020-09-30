<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

interface AkeneoResourcePageInterface
{
    /**
     * @return $this
     */
    public function getFirstPage(): self;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getPreviousPage(): ?AkeneoResourcePageInterface;

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getNextPage(): ?AkeneoResourcePageInterface;

    /**
     * @return int|null
     */
    public function getCount(): ?int;

    /**
     * @return array
     */
    public function getItems(): array;

    /**
     * @return bool
     */
    public function hasNextPage(): bool;

    /**
     * @return bool
     */
    public function hasPreviousPage(): bool;

    /**
     * @return string|null
     */
    public function getNextLink(): ?string;

    /**
     * @return string|null
     */
    public function getPreviousLink(): ?string;
}
