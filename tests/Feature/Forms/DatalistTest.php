<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyDatalist;

it('can render', function () {
    Livewire::test(MyDatalist::class)
        ->assertStatus(200);
});
