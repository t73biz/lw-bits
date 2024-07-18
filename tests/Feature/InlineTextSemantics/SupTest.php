<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MySup;

it('can render', function () {
    Livewire::test(MySup::class)
        ->assertStatus(200);
});
