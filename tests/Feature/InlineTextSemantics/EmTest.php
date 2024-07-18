<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyEm;

it('can render', function () {
    Livewire::test(MyEm::class)
        ->assertStatus(200);
});
