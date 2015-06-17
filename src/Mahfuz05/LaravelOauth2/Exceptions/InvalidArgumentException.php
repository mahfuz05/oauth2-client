<?php
/**
 * @package Laravel OAuth2 Client
 * @author  Mahfuzur Rahman
 * Date:    03.05.15
 */

namespace Mahfuz05\LaravelOauth2\Exceptions;

class InvalidArgumentException extends \InvalidArgumentException {

    const INVALID_GRANT_TYPE      = 0x01;
    const CERTIFICATE_NOT_FOUND   = 0x02;
    const REQUIRE_PARAMS_AS_ARRAY = 0x03;
    const MISSING_PARAMETER       = 0x04;

} 