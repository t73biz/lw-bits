<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTr;

it('can render', function () {
    Livewire::test(MyTr::class)
        ->assertStatus(200);
});
