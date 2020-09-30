<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim;

use Spryker\Service\Kernel\AbstractBundleConfig;
use SprykerEco\Shared\AkeneoPim\AkeneoPimConstants;

class AkeneoPimConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->get(AkeneoPimConstants::HOST);
    }

    /**
     * @api
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->get(AkeneoPimConstants::USERNAME);
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->get(AkeneoPimConstants::PASSWORD);
    }

    /**
     * @api
     *
     * @return string
     */
    public function getClientId(): string
    {
        return $this->get(AkeneoPimConstants::CLIENT_ID);
    }

    /**
     * @api
     *
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->get(AkeneoPimConstants::CLIENT_SECRET);
    }
}
