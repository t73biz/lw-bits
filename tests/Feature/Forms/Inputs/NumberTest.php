<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyNumber;

it('can render', function () {
    Livewire::test(MyNumber::class)
        ->assertStatus(200);
});
