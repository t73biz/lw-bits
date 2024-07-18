<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyTel;

it('can render', function () {
    Livewire::test(MyTel::class)
        ->assertStatus(200);
});
