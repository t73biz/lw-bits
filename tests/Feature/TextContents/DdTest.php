<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyDd;

it('can render', function () {
    Livewire::test(MyDd::class)
        ->assertStatus(200);
});
