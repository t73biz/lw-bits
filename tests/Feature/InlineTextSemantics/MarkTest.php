<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyMark;

it('can render', function () {
    Livewire::test(MyMark::class)
        ->assertStatus(200);
});
