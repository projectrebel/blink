<?php

namespace ProjectRebel\Blink;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use ProjectRebel\Blink\Commands\BlinkCommand;
use ProjectRebel\Blink\Http\Controllers\BlogController;

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


        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blink');

        Route::macro('blink', function(string $prefix) {
            Route::prefix($prefix)->group(function () {
                Route::get('/', [BlogController::class, 'index']);
                Route::get('/{slug}', [BlogController::class, 'show']);
            });
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blink.php', 'blink');
    }
}
