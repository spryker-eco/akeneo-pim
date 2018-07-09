<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter;

use Akeneo\Pim\ApiClient\AkeneoPimClient;

abstract class AbstractApiAdapter implements ApiAdapterInterface
{
    /**
     * @var \Akeneo\Pim\ApiClient\AkeneoPimClient
     */
    protected $akeneoPimClient;

    /**
     * @param \Akeneo\Pim\ApiClient\AkeneoPimClient $akeneoPimClient
     */
    public function __construct(AkeneoPimClient $akeneoPimClient)
    {
        $this->akeneoPimClient = $akeneoPimClient;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function get($code);

    /**
     * {@inheritdoc}
     */
    abstract public function listPerPage($limit = 10, $withCount = false, array $queryParameters = []);

    /**
     * {@inheritdoc}
     */
    abstract public function all($pageSize = 10, array $queryParameters = []);
}
