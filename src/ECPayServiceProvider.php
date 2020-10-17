<?php

namespace Travis0125\ECPay;

use Illuminate\Support\ServiceProvider;

class ECPayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        //config
        $this->publishes([
            __DIR__ . '/../config/ecpay.php' => config_path('ecpay.php')
        ], 'ecpay');

        //view
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ecpay');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('ecpay', function ($app) {
            return new ECPay();
        });
    }
}
