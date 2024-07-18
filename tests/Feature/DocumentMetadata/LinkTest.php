<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyLink;

it('can render', function () {
    Livewire::test(MyLink::class)
        ->assertStatus(200);
});
