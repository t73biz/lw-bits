<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTfoot;

it('can render', function () {
    Livewire::test(MyTfoot::class)
        ->assertStatus(200);
});
