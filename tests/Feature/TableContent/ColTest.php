<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyCol;

it('can render', function () {
    Livewire::test(MyCol::class)
        ->assertStatus(200);
});

it('can render with span', function () {
    Livewire::test(MyCol::class, ['span' => 2])
        ->assertSee('span="2"', false);
});
