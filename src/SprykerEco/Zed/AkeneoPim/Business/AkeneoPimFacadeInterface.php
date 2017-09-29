<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business;

use Generated\Shared\Transfer\AkeneoPimImportTransfer;

/**
 * Interface AkeneoPimFacadeInterface
 * @package SprykerEco\Zed\Business
 */
interface AkeneoPimFacadeInterface
{

    /**
     * @param \Generated\Shared\Transfer\AkeneoPimImportTransfer $akeneoPimImportTransfer
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportReportTransfer
     */
    public function import(AkeneoPimImportTransfer $akeneoPimImportTransfer);

}
