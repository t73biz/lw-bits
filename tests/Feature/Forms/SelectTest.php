<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MySelect;

it('can render', function () {
    Livewire::test(MySelect::class)
        ->assertStatus(200);
});

it('can render with disabled', function () {
    Livewire::test(MySelect::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with form', function () {
    Livewire::test(MySelect::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with multiple', function () {
    Livewire::test(MySelect::class, ['multiple' => true])
        ->assertSee('multiple');
});

it('can render with name', function () {
    Livewire::test(MySelect::class, ['name' => 'main-select'])
        ->assertSee('name="main-select"', false);
});

it('can render with required', function () {
    Livewire::test(MySelect::class, ['required' => true])
        ->assertSee('required');
});

it('can render with size', function () {
    Livewire::test(MySelect::class, ['size' => 5])
        ->assertSee('size="5"', false);
});
