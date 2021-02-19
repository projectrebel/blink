<?php

namespace ProjectRebel\Blink;

use Illuminate\Support\ServiceProvider;

class BlinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/blink.php' => config_path('blink.php'),
            ], 'blink-config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blink.php', 'blink');
    }
}
