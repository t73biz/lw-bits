<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyKbd;

it('can render', function () {
    Livewire::test(MyKbd::class)
        ->assertStatus(200);
});
