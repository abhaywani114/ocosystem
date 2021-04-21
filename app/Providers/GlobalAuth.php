<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Http\Controllers\GlobalAuthController;
use Illuminate\Support\Facades\View;
use Log;

class GlobalAuth extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //	
	//$globalAuth = new GlobalAuthController();
//	View::share('globalAuth',$globalAuth);
       }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    //
	
	$globalAuth = '';
	view()->composer('*', function ($view)  {
	
	$globalAuth = new GlobalAuthController();

	$view->with('globalAuth',$globalAuth);
     });

    }
}
