<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyTextarea;

it('can render', function () {
    Livewire::test(MyTextarea::class)
        ->assertStatus(200);
});

it('can render with autocomplete off', function () {
    Livewire::test(MyTextarea::class, ['autocomplete' => 'off'])
        ->assertSee('autocomplete="off"', false);
});

it('can render with autocomplete on', function () {
    Livewire::test(MyTextarea::class, ['autocomplete' => 'on'])
        ->assertSee('autocomplete="on"', false);
});

it('throws an exception if autocomplete is misvalued', function () {
    Livewire::test(MyTextarea::class, ['autocomplete' => 'yes']);
})->throws(\Illuminate\View\ViewException::class, 'The autocomplete attribute must be either "off" or "on".');

it('can render with cols', function () {
    Livewire::test(MyTextarea::class, ['cols' => 10])
        ->assertSee('cols="10"', false);
});

it('can render with dirname', function () {
    Livewire::test(MyTextarea::class, ['dirname' => 'main-textarea'])
        ->assertSee('dirname="main-textarea"', false);
});

it('can render with disabled', function () {
    Livewire::test(MyTextarea::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with form', function () {
    Livewire::test(MyTextarea::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with maxlength', function () {
    Livewire::test(MyTextarea::class, ['maxlength' => 100])
        ->assertSee('maxlength="100"', false);
});

it('can render with minlength', function () {
    Livewire::test(MyTextarea::class, ['minlength' => 10])
        ->assertSee('minlength="10"', false);
});

it('can render with name', function () {
    Livewire::test(MyTextarea::class, ['name' => 'main-textarea'])
        ->assertSee('name="main-textarea"', false);
});

it('can render with placeholder', function () {
    Livewire::test(MyTextarea::class, ['placeholder' => 'Enter text here'])
        ->assertSee('placeholder="Enter text here"', false);
});

it('can render with readonly', function () {
    Livewire::test(MyTextarea::class, ['readonly' => true])
        ->assertSee('readonly');
});

it('can render with required', function () {
    Livewire::test(MyTextarea::class, ['required' => true])
        ->assertSee('required');
});

it('can render with rows', function () {
    Livewire::test(MyTextarea::class, ['rows' => 10])
        ->assertSee('rows="10"', false);
});
