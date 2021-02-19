<?php

namespace ProjectRebel\Blink\Tests;

use Illuminate\Support\Facades\Route;
use ProjectRebel\Blink\BlinkServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
        Route::blink('blog');
    }

    protected function getPackageProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
