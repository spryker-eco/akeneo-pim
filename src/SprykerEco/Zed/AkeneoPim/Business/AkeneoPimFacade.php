<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business;

use Generated\Shared\Transfer\AkeneoPimImportTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class AkeneoPimFacade
 * @package SprykerEco\Zed\Business
 *
 * @method \SprykerEco\Zed\AkeneoPim\Business\AkeneoPimBusinessFactory getFactory()
 */
class AkeneoPimFacade extends AbstractFacade implements AkeneoPimFacadeInterface
{

    /**
     * @param \Generated\Shared\Transfer\AkeneoPimImportTransfer $akeneoPimImportTransfer
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportReportTransfer
     */
    public function import(AkeneoPimImportTransfer $akeneoPimImportTransfer)
    {
        return $this->getFactory()->createImporter()->import(
            $this->getFactory()->createAkeneoPimClientAdapter(),
            $akeneoPimImportTransfer
        );
    }

}
