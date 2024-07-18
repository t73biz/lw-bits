<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyText;

it('can render', function () {
    Livewire::test(MyText::class)
        ->assertStatus(200);
});
