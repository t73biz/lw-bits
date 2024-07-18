<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyDate;

it('can render with max', function () {
    Livewire::test(MyDate::class, ['max' => '30'])
        ->assertSee('max="30"', false);
});

it('can render with min', function () {
    Livewire::test(MyDate::class, ['min' => '10'])
        ->assertSee('min="10"', false);
});
