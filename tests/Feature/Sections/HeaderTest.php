<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyHeader;

it('can render', function () {
    Livewire::test(MyHeader::class)
        ->assertStatus(200);
});
