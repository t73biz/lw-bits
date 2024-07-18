<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render', function () {
    Livewire::test(MyEmail::class)
        ->assertStatus(200);
});
