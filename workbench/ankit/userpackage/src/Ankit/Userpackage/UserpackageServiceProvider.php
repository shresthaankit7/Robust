<?php namespace Ankit\Userpackage;

use Illuminate\Support\ServiceProvider;

class UserpackageServiceProvider extends ServiceProvider {

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
		$this->package('ankit/userpackage');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['userpackage'] = $this->app->share(function($app){
    		return new Userpackage;
 		 });


		/* Can be done in alias also 
		$this->app->booting(function(){
 			 $loader = \Illuminate\Foundation\AliasLoader::getInstance();
  			 $loader->alias('Userpackage', 'Ankit\Userpackage\Facades\Userpackage');
		});
		*/
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('userpackage');
	}

}
