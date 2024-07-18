<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyDateTimeLocal;

it('can render', function () {
    Livewire::test(MyDateTimeLocal::class)
        ->assertStatus(200);
});
