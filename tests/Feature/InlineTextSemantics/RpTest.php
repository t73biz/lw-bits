<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyRp;

it('can render', function () {
    Livewire::test(MyRp::class)
        ->assertStatus(200);
});
