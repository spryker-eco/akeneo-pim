<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Service\AkeneoPim;

use Spryker\Service\Kernel\AbstractBundleConfig;
use SprykerEco\Shared\AkeneoPim\AkeneoPimConstants;

class AkeneoPimConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getHost()
    {
        return $this->get(AkeneoPimConstants::HOST);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->get(AkeneoPimConstants::USERNAME);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->get(AkeneoPimConstants::PASSWORD);
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->get(AkeneoPimConstants::CLIENT_ID);
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->get(AkeneoPimConstants::CLIENT_SECRET);
    }
}
