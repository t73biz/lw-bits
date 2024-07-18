<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyH2;

it('can render', function () {
    Livewire::test(MyH2::class)
        ->assertStatus(200);
});
