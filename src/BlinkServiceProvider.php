<?php

namespace ProjectRebel\Blink;

use ProjectRebel\Blink\Commands\BlinkCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
