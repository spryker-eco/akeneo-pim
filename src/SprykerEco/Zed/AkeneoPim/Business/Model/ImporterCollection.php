<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Model;

use Generated\Shared\Transfer\AkeneoPimImportTransfer;
use SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapterInterface;

class ImporterCollection implements ImporterCollectionInterface, ImporterInterface
{

    /**
     * @var array
     */
    private $importers = [];

    /**
     * @param \SprykerEco\Zed\AkeneoPim\Business\Model\ImporterInterface $importer
     *
     * @return \SprykerEco\Zed\AkeneoPim\Business\Model\ImporterCollectionInterface
     */
    public function addImporter(ImporterInterface $importer)
    {
        $this->importers[] = $importer;

        return $this;
    }

    /**
     * @param \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapterInterface $client
     * @param \Generated\Shared\Transfer\AkeneoPimImportTransfer $akeneoPimImportTransfer
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportReportTransfer
     */
    public function import(
        AkeneoPimClientAdapterInterface $client,
        AkeneoPimImportTransfer $akeneoPimImportTransfer
    ) {
        foreach ($this->importers as $importer) {
            $importer->import($client, $akeneoPimImportTransfer);
        }

        return $akeneoPimImportTransfer->getReport();
    }

}
