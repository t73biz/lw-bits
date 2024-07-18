<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyBold;

it('can render', function () {
    Livewire::test(MyBold::class)
        ->assertStatus(200);
});
