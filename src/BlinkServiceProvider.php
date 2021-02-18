<?php

namespace ProjectRebel\Blink;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ProjectRebel\Blink\Commands\BlinkCommand;

class BlinkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blink')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_blink_table')
            ->hasCommand(BlinkCommand::class);
    }
}
