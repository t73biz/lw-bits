<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyFooter;

it('can render', function () {
    Livewire::test(MyFooter::class)
        ->assertStatus(200);
});
