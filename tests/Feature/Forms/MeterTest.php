<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyMeter;

it('can render', function () {
    Livewire::test(MyMeter::class)
        ->assertStatus(200);
});

it('can render with high', function () {
    Livewire::test(MyMeter::class, ['high' => 2])
        ->assertSee('high="2"', false);
});

it('can render with low', function () {
    Livewire::test(MyMeter::class, ['low' => 4])
        ->assertSee('low="4"', false);
});

it('can render with optimum', function () {
    Livewire::test(MyMeter::class, ['optimum' => 2])
        ->assertSee('optimum="2"', false);
});

it('can render with form', function () {
    Livewire::test(MyMeter::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});
