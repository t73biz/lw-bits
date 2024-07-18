<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyAside;

it('can render', function () {
    Livewire::test(MyAside::class)
        ->assertStatus(200);
});
