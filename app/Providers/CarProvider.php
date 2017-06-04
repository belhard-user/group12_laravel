<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('car', function(){
            $r = rand(1,1000);
            return new \Car(new \A('Tank' . $r), 'Hello world'.$r);
        });
    }
}
