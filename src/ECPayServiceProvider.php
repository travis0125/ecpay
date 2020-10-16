<?php

namespace Travis0125\ECPay;

use Illuminate\Support\ServiceProvider;

class ECPayServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

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
        $this->app->singleton(ECPay::class, function ($app) {
            return new ECPay();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ECPay::class, 'ecpay'];
    }
}