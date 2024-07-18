<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyTime;

it('can render', function () {
    Livewire::test(MyTime::class)
        ->assertStatus(200);
});
