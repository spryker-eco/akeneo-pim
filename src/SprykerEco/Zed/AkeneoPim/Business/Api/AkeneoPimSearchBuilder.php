<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPim\Business\Api;

/**
 * Class AkeneoPimSearchBuilderAdapter
 * @package SprykerEco\Zed\AkeneoPim\Business\Api
 */
class AkeneoPimSearchBuilder implements AkeneoPimSearchBuilderInterface
{

    /**
     * @var array
     */
    private $filters;

    /**
     * @param string $property
     * @param string $operator
     * @param mixed|null $value
     * @param array $options
     *
     * @return \SprykerEco\Zed\AkeneoPim\Business\Api\AkeneoPimSearchBuilder
     */
    public function addFilter($property, $operator, $value = null, array $options = [])
    {
        $filter = ['operator' => $operator];
        if ($value) {
            $filter['value'] = $value;
        }
        $this->filters[$property][] = $filter + $options;

        return $this;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        $filters = $this->filters;
        $this->filters = [];

        return $filters;
    }

}
