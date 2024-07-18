<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyOutput;

it('can render', function () {
    Livewire::test(MyOutput::class)
        ->assertStatus(200);
});

it('can render with for', function () {
    Livewire::test(MyOutput::class, ['for' => 'main-output'])
        ->assertSee('for="main-output"', false);
});

it('can render with form', function () {
    Livewire::test(MyOutput::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with name', function () {
    Livewire::test(MyOutput::class, ['name' => 'main-output'])
        ->assertSee('name="main-output"', false);
});
