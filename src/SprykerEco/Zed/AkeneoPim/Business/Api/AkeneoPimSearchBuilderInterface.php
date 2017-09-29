<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Api;

/**
 * Interface AkeneoPimSearchBuilderAdapterInterface
 * @package SprykerEco\Zed\AkeneoPim\Business\Api
 */
interface AkeneoPimSearchBuilderInterface
{

    /**
     * @param string $property
     * @param string $operator
     * @param mixed|null $value
     * @param array $options
     *
     * @return \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilder
     */
    public function addFilter($property, $operator, $value = null, array $options = []);

    /**
     * @return mixed
     */
    public function getFilters();

}
