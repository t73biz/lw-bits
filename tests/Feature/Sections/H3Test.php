<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyH3;

it('can render', function () {
    Livewire::test(MyH3::class)
        ->assertStatus(200);
});
