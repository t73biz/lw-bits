<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyBdo;

it('can render', function () {
    Livewire::test(MyBdo::class)
        ->assertStatus(200);
});
