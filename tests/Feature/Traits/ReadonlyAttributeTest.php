<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyDate;

it('can render with readonly', function () {
    Livewire::test(MyDate::class, ['readonly' => true])
        ->assertSee('readonly');
});
