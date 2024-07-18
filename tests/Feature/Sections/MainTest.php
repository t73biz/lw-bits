<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyMain;

it('can render', function () {
    Livewire::test(MyMain::class)
        ->assertStatus(200);
});
