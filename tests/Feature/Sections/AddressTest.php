<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyAddress;

it('can render', function () {
    Livewire::test(MyAddress::class)
        ->assertStatus(200);
});
