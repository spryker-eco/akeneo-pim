<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Model;

use Generated\Shared\Transfer\AkeneoPimImportTransfer;
use SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapterInterface;

interface ImporterInterface
{

    /**
     * @param \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapterInterface $client
     * @param \Generated\Shared\Transfer\AkeneoPimImportTransfer $akeneoPimImportTransfer
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportReportTransfer
     */
    public function import(
        AkeneoPimClientAdapterInterface $client,
        AkeneoPimImportTransfer $akeneoPimImportTransfer
    );

}
