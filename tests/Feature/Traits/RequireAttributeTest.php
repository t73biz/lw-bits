<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyCheckbox;

it('can render with required', function () {
    Livewire::test(MyCheckbox::class, ['required' => true, 'value' => '3'])
        ->assertSee('required');
});
