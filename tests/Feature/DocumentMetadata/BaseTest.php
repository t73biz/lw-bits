<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyBase;

it('can render', function () {
    Livewire::test(MyBase::class)
        ->assertStatus(200);
});
