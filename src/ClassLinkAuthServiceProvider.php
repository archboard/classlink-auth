<?php

namespace Archboard\ClassLinkAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Archboard\ClassLinkAuth\Commands\ClassLinkAuthCommand;

class ClassLinkAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('classlink-auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_classlink-auth_table')
            ->hasCommand(ClassLinkAuthCommand::class);
    }
}
