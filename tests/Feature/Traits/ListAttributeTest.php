<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render with list', function () {
    Livewire::test(MyEmail::class, ['list' => 'foo'])
        ->assertSee('list="foo"', false);
});
