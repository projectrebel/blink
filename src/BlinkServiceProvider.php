<?php

namespace ProjectRebel\Blink;

use ProjectRebel\Blink\Commands\BlinkCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BlinkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('blink')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(BlinkCommand::class);
    }
}
