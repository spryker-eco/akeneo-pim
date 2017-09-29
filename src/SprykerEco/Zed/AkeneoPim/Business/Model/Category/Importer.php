<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Model\Category;

use Generated\Shared\Transfer\AkeneoPimImportTransfer;
use SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapterInterface;
use SprykerEco\Zed\AkeneoPim\Business\Model\ImporterInterface;

/**
 * Class Importer
 * @package SprykerEco\Zed\AkeneoPim\Business\Model\Category
 */
class Importer implements ImporterInterface
{

    /**
     * @param \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapterInterface $client
     * @param \Generated\Shared\Transfer\AkeneoPimImportTransfer $akeneoPimImportTransfer
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportReportTransfer
     */
    public function import(AkeneoPimClientAdapterInterface $client, AkeneoPimImportTransfer $akeneoPimImportTransfer)
    {
        $categories = $client->getCategories(50);
        $counter = 0;
        foreach ($categories as $category) {
            ++$counter;
        }
        $akeneoPimImportTransfer->getReport()->setResult('Categories Imported: ' . $counter);

        return $akeneoPimImportTransfer->getReport();
    }

}
