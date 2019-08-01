<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Shared\AkeneoPim;

/**
 * Declares global environment configuration keys. Do not use it for other class constants.
 */
interface AkeneoPimConstants
{
    /**
     * Specification:
     * - Akeneo host url.
     *
     * @api
     */
    public const HOST = 'AKENEOPIM:HOST';

    /**
     * Specification:
     * - Akeneo username.
     *
     * @api
     */
    public const USERNAME = 'AKENEOPIM:USERNAME';

    /**
     * Specification:
     * - Akeneo password.
     *
     * @api
     */
    public const PASSWORD = 'AKENEOPIM:PASSWORD';

    /**
     * Specification:
     * - Akeneo public client id.
     *
     * @api
     */
    public const CLIENT_ID = 'AKENEOPIM:CLIENT_ID';

    /**
     * Specification:
     * - Akeneo client secret key.
     *
     * @api
     */
    public const CLIENT_SECRET = 'AKENEOPIM:CLIENT_SECRET';
}
