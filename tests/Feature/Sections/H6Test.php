<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyH6;

it('can render', function () {
    Livewire::test(MyH6::class)
        ->assertStatus(200);
});
