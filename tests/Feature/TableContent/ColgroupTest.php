<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyColgroup;

it('can render', function () {
    Livewire::test(MyColgroup::class)
        ->assertStatus(200);
});

it('can render with span', function () {
    Livewire::test(MyColgroup::class, ['span' => 2])
        ->assertSee('span="2"', false);
});
