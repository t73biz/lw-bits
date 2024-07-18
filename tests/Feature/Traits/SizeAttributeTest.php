<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render with size', function () {
    Livewire::test(MyEmail::class, ['size' => '30'])
        ->assertSee('size="30"', false);
});
