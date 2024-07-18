<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyStyle;

it('can render', function () {
    Livewire::test(MyStyle::class)
        ->assertStatus(200);
});
