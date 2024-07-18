<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyHidden;

it('can render', function () {
    Livewire::test(MyHidden::class)
        ->assertStatus(200);
});
