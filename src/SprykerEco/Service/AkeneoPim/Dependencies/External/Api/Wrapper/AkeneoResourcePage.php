<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

use Akeneo\Pim\ApiClient\Pagination\PageInterface;

class AkeneoResourcePage implements AkeneoResourcePageInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\Pagination\PageInterface $page
     */
    protected $page;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\PageInterface $page
     * @param \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(PageInterface $page, WrapperFactoryInterface $wrapperFactory)
    {
        $this->page = $page;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getFirstPage(): AkeneoResourcePageInterface
    {
        $firstPage = $this->page
            ->getFirstPage();

        return $this->wrapperFactory
            ->createAkeneoPage($firstPage);
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getPreviousPage(): ?AkeneoResourcePageInterface
    {
        $previousPage = $this->page
            ->getPreviousPage();
        if (!$previousPage) {
            return null;
        }

        return $this->wrapperFactory
            ->createAkeneoPage($previousPage);
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getNextPage(): ?AkeneoResourcePageInterface
    {
        $nextPage = $this->page
            ->getNextPage();
        if (!$nextPage) {
            return null;
        }

        return $this->wrapperFactory
            ->createAkeneoPage($nextPage);
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->page
            ->getCount();
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->page
            ->getItems();
    }

    /**
     * @return bool
     */
    public function hasNextPage(): bool
    {
        return $this->page
            ->hasNextPage();
    }

    /**
     * @return bool
     */
    public function hasPreviousPage(): bool
    {
        return $this->page
            ->hasPreviousPage();
    }

    /**
     * @return string|null
     */
    public function getNextLink(): ?string
    {
        return $this->page
            ->getNextLink();
    }

    /**
     * @return string|null
     */
    public function getPreviousLink(): ?string
    {
        return $this->page
            ->getNextLink();
    }
}
