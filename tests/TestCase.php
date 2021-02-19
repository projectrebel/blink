<?php

namespace ProjectRebel\Blink\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use ProjectRebel\Blink\BlinkServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            function (string $modelName) {
                return 'ProjectRebel\\Blink\\Database\\Factories\\'.class_basename($modelName).'Factory';
            }
        );
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
