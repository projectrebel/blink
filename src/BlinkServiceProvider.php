<?php

namespace ProjectRebel\Blink;

use Illuminate\Support\ServiceProvider;
use ProjectRebel\Blink\Commands\BlinkCommand;

class BlinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/blink.php' => config_path('blink.php'),
            ], 'blink-config');

            $this->commands([
                BlinkCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blink.php', 'blink');
    }
}
