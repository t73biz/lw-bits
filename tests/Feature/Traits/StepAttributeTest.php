<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyNumber;

it('can set the step attribute', function () {
    Livewire::test(MyNumber::class, ['step' => '0.1'])
        ->assertSee('step="0.1"', false);
});
