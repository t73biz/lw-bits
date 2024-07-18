<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyUrl;

it('can render', function () {
    Livewire::test(MyUrl::class)
        ->assertStatus(200);
});
