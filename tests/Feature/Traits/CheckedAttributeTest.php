<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyCheckbox;

it('can render with checked', function () {
    Livewire::test(MyCheckbox::class, ['checked' => true, 'value' => '1'])
        ->assertSee('checked');
});
