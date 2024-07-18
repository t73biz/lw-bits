<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render with multiple', function () {
    Livewire::test(MyEmail::class, ['multiple' => true])
        ->assertSee('multiple', false);
});
