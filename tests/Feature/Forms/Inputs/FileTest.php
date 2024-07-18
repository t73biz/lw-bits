<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyFile;

it('can render', function () {
    Livewire::test(MyFile::class)
        ->assertStatus(200);
});
