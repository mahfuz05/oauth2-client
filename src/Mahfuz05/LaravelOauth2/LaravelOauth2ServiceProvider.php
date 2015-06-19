<?php namespace Mahfuz05\LaravelOauth2;

use Illuminate\Support\ServiceProvider;

class LaravelOauth2ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('mahfuz05/laravel-oauth2');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Register 'oauth2'
        $this->app['laraveloauth2'] = $this->app->share(function($app)
        {
            $config = $app['config'];
            // create oAuth instance
            $laraveloauth2 = new LaravelOauth2($config->get('config.client.id'), $config->get('config.client.secret'));
            // return oAuth instance
            return $laraveloauth2;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
