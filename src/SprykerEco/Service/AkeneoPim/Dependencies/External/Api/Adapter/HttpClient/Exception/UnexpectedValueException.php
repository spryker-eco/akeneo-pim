<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\HttpClient\Exception;

use Http\Client\Exception;
use UnexpectedValueException as SplUnexpectedValueException;

class UnexpectedValueException extends SplUnexpectedValueException implements Exception
{
}
