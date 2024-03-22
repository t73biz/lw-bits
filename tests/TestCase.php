<?php

namespace T73biz\LwBits\Tests;

use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use T73biz\LwBits\LwBitsServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LwBitsServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }
}
