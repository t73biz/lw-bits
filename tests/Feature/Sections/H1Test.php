<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyH1;

it('can render', function () {
    Livewire::test(MyH1::class)
        ->assertStatus(200);
});
