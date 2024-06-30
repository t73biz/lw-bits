<?php

namespace T73biz\LwBits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lw-bits');

        // Dynamically load all components
        $directories = File::directories(__DIR__.'/Components');
        foreach ($directories as $directory) {
            $files = File::files($directory);
            foreach ($files as $file) {
                $fileName = pathinfo($file, PATHINFO_FILENAME);
                $directoryName = pathinfo($directory, PATHINFO_BASENAME);
                $className = 'T73biz\\LwBits\\Components\\'.$directoryName.'\\'.$fileName;
                $componentName = 'lw-bits::'.Str::snake($directoryName).'.'.Str::snake($fileName);
                \Livewire\Livewire::component($componentName, $className);
            }
        }
    }
}
