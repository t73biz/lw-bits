<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyRuby;

it('can render', function () {
    Livewire::test(MyRuby::class)
        ->assertStatus(200);
});
