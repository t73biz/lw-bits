<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyBr;

it('can render', function () {
    Livewire::test(MyBr::class)
        ->assertStatus(200);
});
