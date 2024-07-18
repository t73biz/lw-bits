<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyData;

it('can render', function () {
    Livewire::test(MyData::class)
        ->assertStatus(200);
});
