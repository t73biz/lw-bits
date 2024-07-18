<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTbody;

it('can render', function () {
    Livewire::test(MyTbody::class)
        ->assertStatus(200);
});
