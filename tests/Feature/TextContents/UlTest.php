<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyUl;

it('can render', function () {
    Livewire::test(MyUl::class)
        ->assertStatus(200);
});
