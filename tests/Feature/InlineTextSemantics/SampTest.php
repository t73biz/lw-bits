<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MySamp;

it('can render', function () {
    Livewire::test(MySamp::class)
        ->assertStatus(200);
});
