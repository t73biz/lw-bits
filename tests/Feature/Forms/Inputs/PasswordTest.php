<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyPassword;

it('can render', function () {
    Livewire::test(MyPassword::class)
        ->assertStatus(200);
});
