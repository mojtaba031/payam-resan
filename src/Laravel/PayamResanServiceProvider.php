<?php

namespace PayamResan\Package\Laravel;

use Illuminate\Support\ServiceProvider;
use PayamResan\Package\PayamResan;

class PayamResanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/payamresan.php', 'payamresan' );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([ __DIR__.'/config/payamresan.php' => config_path('payamresan.php') ]);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->singleton('PayamResan', function(){
            return new PayamResan();
        });
    }
}
