<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyMenu;

it('can render', function () {
    Livewire::test(MyMenu::class)
        ->assertStatus(200);
});
