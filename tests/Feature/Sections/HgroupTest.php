<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyHgroup;

it('can render', function () {
    Livewire::test(MyHgroup::class)
        ->assertStatus(200);
});
