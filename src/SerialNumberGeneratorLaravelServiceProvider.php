<?php

namespace CoruscateSolutions\SerialNumberGeneratorLaravel;

use Illuminate\Support\ServiceProvider;

class SerialNumberGeneratorLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    { 
        //include (__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
    }
}