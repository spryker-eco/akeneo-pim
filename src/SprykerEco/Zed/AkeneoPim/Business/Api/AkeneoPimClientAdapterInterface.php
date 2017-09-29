<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Api;

/**
 * Interface ClientInterface
 * @package SprykerEco\Zed\AkeneoPim\Business\Api
 */
interface AkeneoPimClientAdapterInterface
{

    /**
     * @return \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilderInterface
     */
    public function getSearchBuilder();

    /**
     * @param int $pageSize
     *
     * @return \Akeneo\Pim\Pagination\ResourceCursorInterface
     */
    public function getCategories($pageSize);

    /**
     * @param int $pageSize
     *
     * @return \Akeneo\Pim\Pagination\ResourceCursorInterface
     */
    public function getAttributes($pageSize);

    /**
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \Akeneo\Pim\Pagination\ResourceCursorInterface
     */
    public function getProducts($pageSize, array $queryParameters = []);

}
