<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyThead;

it('can render', function () {
    Livewire::test(MyThead::class)
        ->assertStatus(200);
});
