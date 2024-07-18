<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyFieldset;

it('can render', function () {
    Livewire::test(MyFieldset::class)
        ->assertStatus(200);
});
