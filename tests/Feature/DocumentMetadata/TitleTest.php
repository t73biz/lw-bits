<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyTitle;

it('can render', function () {
    Livewire::test(MyTitle::class)
        ->assertStatus(200);
});
