<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyMap;

it('can render', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map'])
        ->assertStatus(200);
});

it('can render with name', function () {
    Livewire::test(MyMap::class, ['name' => 'main-map'])
        ->assertSee('name="main-map"', false);
});

it('Throws an exception for no name', function () {
    Livewire::test(MyMap::class);
})->throws(\Illuminate\View\ViewException::class, 'The name attribute is required for the map element.');

it('Throws an exception for name and id mismatch', function () {
    Livewire::test(MyMap::class, ['name' => 'main-map', 'id' => 'my-map']);
})->throws(\Illuminate\View\ViewException::class, 'The id attribute must have the same value as the name attribute.');
