<?php

namespace T73biz\LwBits;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use T73biz\LwBits\Commands\LwBitsCommand;

class LwBitsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lw-bits')
            ->hasViews();
    }
}
