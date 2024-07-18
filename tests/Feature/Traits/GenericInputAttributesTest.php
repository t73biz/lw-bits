<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyCheckbox;

it('can render with disabled', function () {
    Livewire::test(MyCheckbox::class, ['disabled' => true, 'value' => '1'])
        ->assertSee('disabled', false);
});

it('can render with form', function () {
    Livewire::test(MyCheckbox::class, ['form' => 'main-form', 'value' => '1'])
        ->assertSee('form="main-form"', false);
});

it('can render with name', function () {
    Livewire::test(MyCheckbox::class, ['name' => 'main-div', 'value' => '1'])
        ->assertSee('name="main-div"', false);
});

it('can render with value', function () {
    Livewire::test(MyCheckbox::class, ['value' => '1'])
        ->assertSee('value="1"', false);
});
