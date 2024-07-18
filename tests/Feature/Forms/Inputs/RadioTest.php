<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyRadio;

it('can render', function () {
    Livewire::test(MyRadio::class)
        ->assertStatus(200);
});
