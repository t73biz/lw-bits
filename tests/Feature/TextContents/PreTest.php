<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyPre;

it('can render', function () {
    Livewire::test(MyPre::class)
        ->assertStatus(200);
});
