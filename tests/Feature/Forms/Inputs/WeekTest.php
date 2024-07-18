<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyWeek;

it('can render', function () {
    Livewire::test(MyWeek::class)
        ->assertStatus(200);
});
