<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyQuote;

it('can render', function () {
    Livewire::test(MyQuote::class)
        ->assertStatus(200);
});
