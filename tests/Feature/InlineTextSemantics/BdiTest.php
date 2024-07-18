<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyBdi;

it('can render', function () {
    Livewire::test(MyBdi::class)
        ->assertStatus(200);
});
