<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Model;

/**
 * Interface ImporterCollectionInterface
 * @package SprykerEco\Zed\AkeneoPim\Business\Model
 */
interface ImporterCollectionInterface
{

    /**
     * @param \SprykerEco\Zed\AkeneoPim\Business\Model\ImporterInterface $importer
     *
     * @return \SprykerEco\Zed\AkeneoPim\Business\Model\ImporterCollectionInterface
     */
    public function addImporter(ImporterInterface $importer);

}
