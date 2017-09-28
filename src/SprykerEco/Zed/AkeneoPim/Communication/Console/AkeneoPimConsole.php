<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Communication\Console;

use Spryker\Zed\Kernel\Communication\Console\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AkeneoPimConsole
 * @package SprykerEco\Zed\AkeneoPim\Communication\Console
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
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // TODO: Implement call to Facade
    }
}