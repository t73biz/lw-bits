<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyDiv;

it('can render', function () {
    Livewire::test(MyDiv::class)
        ->assertStatus(200);
});
