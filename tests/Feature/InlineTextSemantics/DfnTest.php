<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyDfn;

it('can render', function () {
    Livewire::test(MyDfn::class)
        ->assertStatus(200);
});
