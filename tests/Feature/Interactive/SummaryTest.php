<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Interactive\MySummary;

it('can render', function () {
    Livewire::test(MySummary::class)
        ->assertStatus(200);
});
