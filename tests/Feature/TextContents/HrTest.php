<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyHr;

it('can render', function () {
    Livewire::test(MyHr::class)
        ->assertStatus(200);
});
