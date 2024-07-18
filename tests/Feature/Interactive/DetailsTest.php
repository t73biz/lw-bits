<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Interactive\MyDetails;

it('can render', function () {
    Livewire::test(MyDetails::class)
        ->assertStatus(200);
});

it('can render with open', function () {
    Livewire::test(MyDetails::class, ['open' => true])
        ->assertSee('open');
});

it('can render with name', function () {
    Livewire::test(MyDetails::class, ['name' => 'main-details'])
        ->assertSee('name="main-details"', false);
});
