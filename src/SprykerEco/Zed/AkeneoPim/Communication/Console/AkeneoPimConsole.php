<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Communication\Console;

use Generated\Shared\Transfer\AkeneoPimImportConfigTransfer;
use Generated\Shared\Transfer\AkeneoPimImportOptionsTransfer;
use Generated\Shared\Transfer\AkeneoPimImportReportTransfer;
use Generated\Shared\Transfer\AkeneoPimImportTransfer;
use Spryker\Zed\Kernel\Communication\Console\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AkeneoPimConsole
 * @package SprykerEco\Zed\AkeneoPim\Communication\Console
 *
 * @method \SprykerEco\Zed\AkeneoPim\Business\AkeneoPimFacadeInterface getFacade()
 */
class AkeneoPimConsole extends Console
{

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName('akeneo:import')
            ->setDescription('This command executes Akeneo Pim importers');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $akeneoPimImportTransfer = $this->getAkeneoPimImportTransfer($input);
        $akeneoPimImportReportTransfer = $this->getFacade()->import($akeneoPimImportTransfer);

        $this->output->writeln($akeneoPimImportReportTransfer->getResult());
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportTransfer
     */
    private function getAkeneoPimImportTransfer(InputInterface $input)
    {
        $akeneoPimImportTransfer = new AkeneoPimImportTransfer();
        $akeneoPimImportTransfer->setConfig($this->getAkeneoPimImportConfigTransfer());
        $akeneoPimImportTransfer->setOptions($this->getAkeneoOptionsTransfer($input));
        $akeneoPimImportTransfer->setReport(new AkeneoPimImportReportTransfer());

        return $akeneoPimImportTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\AkeneoPimImportConfigTransfer
     */
    private function getAkeneoPimImportConfigTransfer()
    {
        // TODO Get options from input
        $akeneoPimImportConfigTransfer = new AkeneoPimImportConfigTransfer();
        $akeneoPimImportConfigTransfer->setType('import');

        return $akeneoPimImportConfigTransfer;
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     *
     * @return \Generated\Shared\Transfer\AkeneoPimImportOptionsTransfer
     */
    private function getAkeneoOptionsTransfer(InputInterface $input)
    {
        // TODO Get options from input
        $akeneoPimImportOptionsTransfer = new AkeneoPimImportOptionsTransfer();
        $akeneoPimImportOptionsTransfer->setChannel('commerce');
        $akeneoPimImportOptionsTransfer->setLocale('en_EN');

        return $akeneoPimImportOptionsTransfer;
    }

}
