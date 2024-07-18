<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyMeta;

it('can render', function () {
    Livewire::test(MyMeta::class)
        ->assertStatus(200);
});
