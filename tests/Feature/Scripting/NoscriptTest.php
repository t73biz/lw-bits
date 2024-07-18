<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Scripting\MyNoscript;

it('can render', function () {
    Livewire::test(MyNoscript::class)
        ->assertStatus(200);
});
