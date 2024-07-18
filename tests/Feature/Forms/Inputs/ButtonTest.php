<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyButton;

it('can render', function () {
    Livewire::test(MyButton::class)
        ->assertStatus(200);
});
