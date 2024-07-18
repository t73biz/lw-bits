<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\SvgMathMl\MyMath;

it('can render', function () {
    Livewire::test(MyMath::class)
        ->assertStatus(200);
});

it('can render with display', function () {
    Livewire::test(MyMath::class, ['display' => 'block'])
        ->assertSee('display="block"', false);
});

it('throws an exception with invalid display', function () {
    $this->expectExceptionMessage('The display attribute must be either block or inline.');
    Livewire::test(MyMath::class, ['display' => 'invalid']);
});
