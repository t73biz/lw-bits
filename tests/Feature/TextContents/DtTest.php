<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyDt;

it('can render', function () {
    Livewire::test(MyDt::class)
        ->assertStatus(200);
});
