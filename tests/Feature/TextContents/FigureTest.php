<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyFigure;

it('can render', function () {
    Livewire::test(MyFigure::class)
        ->assertStatus(200);
});
