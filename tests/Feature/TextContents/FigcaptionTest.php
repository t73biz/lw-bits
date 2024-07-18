<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyFigcaption;

it('can render', function () {
    Livewire::test(MyFigcaption::class)
        ->assertStatus(200);
});
