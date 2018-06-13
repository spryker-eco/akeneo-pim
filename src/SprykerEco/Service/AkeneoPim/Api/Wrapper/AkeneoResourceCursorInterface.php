<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Api\Wrapper;

use Iterator;

interface AkeneoResourceCursorInterface extends Iterator
{
    /**
     * @return int
     */
    public function getPageSize();
}
