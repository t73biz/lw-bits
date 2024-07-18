<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyRt;

it('can render', function () {
    Livewire::test(MyRt::class)
        ->assertStatus(200);
});
