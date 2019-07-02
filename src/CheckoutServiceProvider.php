<?php

namespace Checkout\NganLuong;

use Illuminate\Support\ServiceProvider;

class CheckoutServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes/web.php';
        }
        $this->publishes([
            __DIR__.'/config.php' => config_path('checkout.php'),
        ]);
    }
}
