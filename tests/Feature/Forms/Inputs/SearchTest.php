<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MySearch;

it('can render', function () {
    Livewire::test(MySearch::class)
        ->assertStatus(200);
});
