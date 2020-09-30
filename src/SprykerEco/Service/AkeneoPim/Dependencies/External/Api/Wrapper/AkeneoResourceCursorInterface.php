<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Wrapper;

use Iterator;

interface AkeneoResourceCursorInterface extends Iterator
{
    /**
     * @return int
     */
    public function getPageSize(): int;
}
