<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyLi;

it('can render', function () {
    Livewire::test(MyLi::class)
        ->assertStatus(200);
});

it('can render with value', function () {
    Livewire::test(MyLi::class, ['value' => 1])
        ->assertSee('value="1"', false);
});
