<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyHead;

it('can render', function () {
    Livewire::test(MyHead::class)
        ->assertStatus(200);
});
