<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyH4;

it('can render', function () {
    Livewire::test(MyH4::class)
        ->assertStatus(200);
});
