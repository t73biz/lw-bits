<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MySubmit;

it('can render', function () {
    Livewire::test(MySubmit::class)
        ->assertStatus(200);
});
