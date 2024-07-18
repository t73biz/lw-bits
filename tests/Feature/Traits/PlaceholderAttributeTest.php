<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render with placeholder', function () {
    Livewire::test(MyEmail::class, ['placeholder' => 'Enter your email'])
        ->assertSee('placeholder="Enter your email"', false);
});
