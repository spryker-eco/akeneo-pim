<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

interface AkeneoResourcePageInterface
{
    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function getFirstPage();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getPreviousPage();

    /**
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface|null
     */
    public function getNextPage();

    /**
     * @return int|null
     */
    public function getCount();

    /**
     * @return array
     */
    public function getItems();

    /**
     * @return bool
     */
    public function hasNextPage();

    /**
     * @return bool
     */
    public function hasPreviousPage();

    /**
     * @return string|null
     */
    public function getNextLink();

    /**
     * @return string|null
     */
    public function getPreviousLink();
}
