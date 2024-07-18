<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MySmall;

it('can render', function () {
    Livewire::test(MySmall::class)
        ->assertStatus(200);
});
