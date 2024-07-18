<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyH5;

it('can render', function () {
    Livewire::test(MyH5::class)
        ->assertStatus(200);
});
