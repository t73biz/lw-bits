<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyRange;

it('can render', function () {
    Livewire::test(MyRange::class)
        ->assertStatus(200);
});
