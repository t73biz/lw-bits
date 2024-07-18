<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyCheckbox;

it('can render', function () {
    Livewire::test(MyCheckbox::class, ['value' => '1'])
        ->assertStatus(200);
});
