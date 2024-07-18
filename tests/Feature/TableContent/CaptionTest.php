<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyCaption;

it('can render', function () {
    Livewire::test(MyCaption::class)
        ->assertStatus(200);
});
