<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyCode;

it('can render', function () {
    Livewire::test(MyCode::class)
        ->assertStatus(200);
});
