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
            ->name('stimulsoft')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('routes')
            ->hasMigration('create_stimulsoft-laravel_table')
            ->hasCommand(StimulsoftCommand::class);
    }
    public function bootingPackage()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                base_path('vendor/stimulsoft/reports-php/scripts/stimulsoft.reports.js') => public_path('reporting/stimulsoft.reports.js'),
                base_path('vendor/stimulsoft/reports-php/scripts/stimulsoft.viewer.js') => public_path('reporting/stimulsoft.viewer.js'),
            ], "{$this->package->shortName()}-assets");
            $this->publishes([
                $this->package->basePath('../stubs/example.json') => public_path('reporting/example/data.json'),
                $this->package->basePath('../stubs/report-example.mrt') => public_path('reporting/example/report.mrt'),
            ], "{$this->package->shortName()}-assets");
        }
    }
}
