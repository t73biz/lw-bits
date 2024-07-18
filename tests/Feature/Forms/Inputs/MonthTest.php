<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyMonth;

it('can render', function () {
    Livewire::test(MyMonth::class)
        ->assertStatus(200);
});
