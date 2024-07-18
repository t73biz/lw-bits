<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MySpan;

it('can render', function () {
    Livewire::test(MySpan::class)
        ->assertStatus(200);
});
