<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyItalic;

it('can render', function () {
    Livewire::test(MyItalic::class)
        ->assertStatus(200);
});
