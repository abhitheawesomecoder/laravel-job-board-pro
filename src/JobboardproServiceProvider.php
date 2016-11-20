<?php

namespace Abhitheawesomecoder\Jobboardpro;

use Illuminate\Support\ServiceProvider;

class JobboardproServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     public function boot()
     {
          $this->loadViewsFrom(__DIR__.'/views', 'jobboardpro');
          $this->publishes([
          __DIR__.'/migrations' =>  database_path('/migrations')
         ], 'migrations');
         this->publishes([
         __DIR__.'/seeds' =>  database_path('/seeds')
        ], 'migrations');
 	  	   $this->publishes([
         __DIR__.'/assets' => public_path('vendor/abhitheawesomecoder/jobboardpro'),
         ], 'public');
          $this->publishes([
          __DIR__.'/views' =>  base_path('resources/views/vendor/abhitheawesomecoder/jobboardpro')
         ], 'views');
         $this->publishes([
         __DIR__.'/auth' =>  base_path('resources/views/auth')
        ], 'auth');
        $this->publishes([
        __DIR__.'/layouts' =>  base_path('resources/views/layouts')
       ], 'layouts');
     }

    /**
     * Register the application services.
     *
     * @return void
     */
     public function register()
     {
         include __DIR__.'/routes.php';
         $this->app->make('Abhitheawesomecoder\Jobboardpro\Controllers\JobboardController');
      /*   $this->app->make('Abhitheawesomecoder\Jobboardpro\Controller\JoblistController');*/
     }
}
