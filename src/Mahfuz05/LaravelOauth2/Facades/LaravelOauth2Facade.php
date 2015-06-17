<?php
/**
 * @package Laravel OAuth2 Client
 * @author  Mahfuzur Rahman
 * Date:    03.05.15
 */

namespace Mahfuz05\LaravelOauth2\Facades;

use Illuminate\Support\Facades\Facade;

class Oauth2ClientFacade extends Facade {

    /**
     * Get the registered name of the component
     *
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelOauth2';
    }
}