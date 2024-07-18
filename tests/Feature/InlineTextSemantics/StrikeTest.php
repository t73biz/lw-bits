<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyStrike;

it('can render', function () {
    Livewire::test(MyStrike::class)
        ->assertStatus(200);
});
