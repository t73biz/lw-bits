<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Scripting\MyCanvas;

it('can render', function () {
    Livewire::test(MyCanvas::class)
        ->assertStatus(200);
});
