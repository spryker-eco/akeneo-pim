<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Api;

use Akeneo\Pim\AkeneoPimClientInterface;

/**
 * Class Client
 * @package SprykerEco\Zed\AkeneoPim\Business\Api
 */
class AkeneoPimClientAdapter implements AkeneoPimClientAdapterInterface
{

    /**
     * @var \Akeneo\Pim\AkeneoPimClientInterface
     */
    private $akeneoPimClient;

    /**
     * @var \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilderInterface
     */
    private $akeneoPimSearchBuilder;

    /**
     * AkeneoPimClientAdapter constructor.
     *
     * @param \Akeneo\Pim\AkeneoPimClientInterface $akeneoPimClient
     * @param \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilderInterface $akeneoPimSearchBuilder
     */
    public function __construct(
        AkeneoPimClientInterface $akeneoPimClient,
        AkeneoPimSearchBuilderInterface $akeneoPimSearchBuilder
    ) {
        $this->akeneoPimClient = $akeneoPimClient;
        $this->akeneoPimSearchBuilder = $akeneoPimSearchBuilder;
    }

    /**
     * @return \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilderInterface
     */
    public function getSearchBuilder()
    {
        return $this->akeneoPimSearchBuilder;
    }

    /**
     * @param int $pageSize
     *
     * @return \Akeneo\Pim\Pagination\ResourceCursorInterface
     */
    public function getCategories($pageSize)
    {
        return $this->akeneoPimClient->getCategoryApi()->all($pageSize);
    }

    /**
     * @param int $pageSize
     *
     * @return \Akeneo\Pim\Pagination\ResourceCursorInterface
     */
    public function getAttributes($pageSize)
    {
        return $this->akeneoPimClient->getAttributeApi()->all($pageSize);
    }

    /**
     * @param int $pageSize
     * @param array $queryParameters
     *
     * @return \Akeneo\Pim\Pagination\ResourceCursorInterface
     */
    public function getProducts($pageSize, array $queryParameters = [])
    {
        return $this->akeneoPimClient->getProductApi()->all($pageSize, $queryParameters);
    }

}
