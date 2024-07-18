<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyStrong;

it('can render', function () {
    Livewire::test(MyStrong::class)
        ->assertStatus(200);
});
