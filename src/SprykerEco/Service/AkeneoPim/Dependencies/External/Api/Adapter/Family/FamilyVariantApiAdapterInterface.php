<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\Family;

use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface;

interface FamilyVariantApiAdapterInterface
{
    /**
     * Gets a resource by its code
     *
     * @param string $familyCode Code of the parent family
     * @param string $familyVariantCode Code of the family variant
     *
     * @return array
     */
    public function get($familyCode, $familyVariantCode);

    /**
     * Gets a list of resources by returning the first page.
     * Consequently, this method does not return all the resources.
     *
     * @param string $familyCode Family code from which you want to get a list of family variants.
     * @param int $limit The maximum number of resources to return.
     *                               Do note that the server has a maximum limit allowed.
     * @param bool $withCount Set to true to return the total count of resources.
     *                               This parameter could decrease drastically the performance when set to true.
     * @param array $queryParameters Additional query parameters to pass in the request.
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourcePageInterface
     */
    public function listPerPage($familyCode, $limit = 10, $withCount = false, array $queryParameters = []): AkeneoResourcePageInterface;

    /**
     * Gets a cursor to iterate over a list of resources.
     *
     * @param string $familyCode Family code from which you want to get a list of family variants.
     * @param int $pageSize The size of the page returned by the server.
     *                               Do note that the server has a maximum limit allowed.
     * @param array $queryParameters Additional query parameters to pass in the request
     *
     * @return \SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper\AkeneoResourceCursorInterface
     */
    public function all($familyCode, $pageSize = 10, array $queryParameters = []): AkeneoResourceCursorInterface;
}
