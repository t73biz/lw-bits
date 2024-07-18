<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyColor;

it('can render', function () {
    Livewire::test(MyColor::class)
        ->assertStatus(200);
});
