<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MySearch;

it('can render', function () {
    Livewire::test(MySearch::class)
        ->assertStatus(200);
});
