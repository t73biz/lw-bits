<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyNav;

it('can render', function () {
    Livewire::test(MyNav::class)
        ->assertStatus(200);
});
