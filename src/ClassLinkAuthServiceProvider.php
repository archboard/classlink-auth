<?php

namespace Archboard\ClassLink\Auth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Archboard\ClassLink\Auth\Commands\ClassLinkAuthCommand;

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
            ->hasConfigFile();
    }
}
