<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyButton;

it('can render', function () {
    Livewire::test(MyButton::class)
        ->assertStatus(200);
});
