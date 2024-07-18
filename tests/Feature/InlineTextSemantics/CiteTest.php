<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyCite;

it('can render', function () {
    Livewire::test(MyCite::class)
        ->assertStatus(200);
});
