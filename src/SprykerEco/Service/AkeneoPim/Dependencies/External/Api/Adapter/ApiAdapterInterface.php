<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;

interface ApiAdapterInterface
{
    /**
     * Gets a resource by its code
     *
     * @param string $code Code of the resource
     *
     * @return array
     */
    public function get($code): array;

    /**
     * Gets a list of resources by returning the first page.
     * Consequently, this method does not return all the resources.
     *
     * @param int $limit The maximum number of resources to return.
     *                               Do note that the server has a maximum limit allowed.
     * @param bool $withCount Set to true to return the total count of resources.
     *                               This parameter could decrease drastically the performance when set to true.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function listPerPage($limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Gets a cursor to iterate over a list of resources.
     *
     * @param int $pageSize The size of the page returned by the server.
     *                               Do note that the server has a maximum limit allowed.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function all($pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;
}
