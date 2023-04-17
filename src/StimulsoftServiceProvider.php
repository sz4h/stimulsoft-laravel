<?php

namespace Space\Stimulsoft;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Space\Stimulsoft\Commands\StimulsoftCommand;

class StimulsoftServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('stimulsoft-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_stimulsoft-laravel_table')
            ->hasCommand(StimulsoftCommand::class);
    }
}
