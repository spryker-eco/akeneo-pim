<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

interface AkeneoResourcePageInterface
{
    /**
     * @return $this
     */
    public function getFirstPage();

    /**
     * @return $this|null
     */
    public function getPreviousPage();

    /**
     * @return $this|null
     */
    public function getNextPage();

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
