<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyDl;

it('can render', function () {
    Livewire::test(MyDl::class)
        ->assertStatus(200);
});
