<?php

use Livewire\Livewire;
use T73biz\LwBits\Components\Containers\Div;

it('can render', function () {
    Livewire::test(Div::class)
        ->assertStatus(200);
});
