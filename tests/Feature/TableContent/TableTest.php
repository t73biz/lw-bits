<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTable;

it('can render', function () {
    Livewire::test(MyTable::class)
        ->assertStatus(200);
});
