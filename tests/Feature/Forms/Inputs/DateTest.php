<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyDate;

it('can render', function () {
    Livewire::test(MyDate::class)
        ->assertStatus(200);
});
