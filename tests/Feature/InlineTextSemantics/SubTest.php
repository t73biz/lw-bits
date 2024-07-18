<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MySub;

it('can render', function () {
    Livewire::test(MySub::class)
        ->assertStatus(200);
});
