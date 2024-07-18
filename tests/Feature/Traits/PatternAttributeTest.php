<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyEmail;

it('can render with pattern', function () {
    Livewire::test(MyEmail::class, ['pattern' => '###-###-####'])
        ->assertSee('pattern="###-###-####"', false);
});
