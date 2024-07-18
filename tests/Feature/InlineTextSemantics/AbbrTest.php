<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyAbbr;

it('can render', function () {
    Livewire::test(MyAbbr::class)
        ->assertStatus(200);
});
