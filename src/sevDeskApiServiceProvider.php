<?php

namespace Daylaborers\Sevdeskapi;

use Illuminate\Support\ServiceProvider;

class sevDeskApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('sevdeskapi',function(){
            return new SevDeskApi();
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/sevDeskApi.php' => config_path('sevDeskApi.php'),
        ], 'sevDesk-Config');
    }
}
