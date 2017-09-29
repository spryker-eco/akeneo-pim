<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business;

use Akeneo\Pim\AkeneoPimClientBuilder;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapter;
use SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilder;
use SprykerEco\Zed\AkeneoPim\Business\Model\Category\Importer as CategoryImporter;
use SprykerEco\Zed\AkeneoPim\Business\Model\ImporterCollection;

/**
 * Class AkeneoPimBusinessFactory
 * @package SprykerEco\Zed\Business
 *
 * @method \SprykerEco\Zed\AkeneoPim\AkeneoPimConfig getConfig()
 */
class AkeneoPimBusinessFactory extends AbstractBusinessFactory
{

    /**
     * @return \SprykerEco\Zed\AkeneoPim\Business\Model\ImporterCollection
     */
    public function createImporter()
    {
        $importerCollection = new ImporterCollection();
        $importerCollection->addImporter($this->createCategoryImporter());

        return $importerCollection;
    }

    /**
     * @return \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimClientAdapter
     */
    public function createAkeneoPimClientAdapter()
    {
        return new AkeneoPimClientAdapter(
            $this->createAkeneoPimClient(),
            $this->createAkeneoSearchBuilder()
        );
    }

    /**
     * @return \Akeneo\Pim\AkeneoPimClientInterface
     */
    protected function createAkeneoPimClient()
    {
        $akeneoPimClientBuilder = $this->createAkeneoPimClientBuilder();
        return $akeneoPimClientBuilder
            ->buildAuthenticatedByPassword(
            $this->getConfig()->getClientId(),
            $this->getConfig()->getClientSecret(),
            $this->getConfig()->getUsername(),
            $this->getConfig()->getPassword()
        );
    }

    /**
     * @return \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilderInterface
     */
    protected function createAkeneoSearchBuilder()
    {
        return new AkeneoPimSearchBuilder();
    }

    /**
     * @return \Akeneo\Pim\AkeneoPimClientBuilder
     */
    protected function createAkeneoPimClientBuilder()
    {
        return new AkeneoPimClientBuilder(
            $this->getConfig()->getHost()
        );
    }

    /**
     * @return \SprykerEco\Zed\AkeneoPim\Business\Model\Category\Importer
     */
    protected function createCategoryImporter()
    {
        return new CategoryImporter();
    }

}
