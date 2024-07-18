<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render with maxlength', function () {
    Livewire::test(MyEmail::class, ['maxlength' => 10])
        ->assertSee('maxlength="10"', false);
});

it('can render with minlength', function () {
    Livewire::test(MyEmail::class, ['minlength' => 5])
        ->assertSee('minlength="5"', false);
});
