<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Wrapper;

use Akeneo\Pim\ApiClient\Pagination\PageInterface;

class AkeneoResourcePage implements AkeneoResourcePageInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\Pagination\PageInterface $page
     */
    protected $page;

    /**
     * @var \SprykerEco\Service\AkeneoPim\Api\Wrapper\WrapperFactoryInterface
     */
    protected $wrapperFactory;

    /**
     * @param \Akeneo\Pim\ApiClient\Pagination\PageInterface $page
     * @param \SprykerEco\Service\AkeneoPim\Api\Wrapper\WrapperFactoryInterface $wrapperFactory
     */
    public function __construct(PageInterface $page, WrapperFactoryInterface $wrapperFactory)
    {
        $this->page = $page;
        $this->wrapperFactory = $wrapperFactory;
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getFirstPage()
    {
        $firstPage = $this->page
            ->getFirstPage();

        return $this->wrapperFactory
            ->createAkeneoPage($firstPage);
    }

    /**
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getPreviousPage()
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
     * @return \SprykerEco\Service\AkeneoPim\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getNextPage()
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
    public function getCount()
    {
        return $this->page
            ->getCount();
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->page
            ->getItems();
    }

    /**
     * @return bool
     */
    public function hasNextPage()
    {
        return $this->page
            ->hasNextPage();
    }

    /**
     * @return bool
     */
    public function hasPreviousPage()
    {
        return $this->page
            ->hasPreviousPage();
    }

    /**
     * @return string|null
     */
    public function getNextLink()
    {
        return $this->page
            ->getNextLink();
    }

    /**
     * @return string|null
     */
    public function getPreviousLink()
    {
        return $this->page
            ->getNextLink();
    }
}
