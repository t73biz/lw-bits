<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyUnderline;

it('can render', function () {
    Livewire::test(MyUnderline::class)
        ->assertStatus(200);
});
