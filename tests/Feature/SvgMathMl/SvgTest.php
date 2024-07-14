<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\SvgMathMl\MySvg;

it('can render', function () {
    Livewire::test(MySvg::class)
        ->assertStatus(200);
});

it('can render with height', function () {
    Livewire::test(MySvg::class, ['height' => '100'])
        ->assertSee('height="100"', false);
});

it('can render with preserveAspectRatio', function () {
    Livewire::test(MySvg::class, ['preserveAspectRatio' => 'xMidYMid meet'])
        ->assertSee('preserveAspectRatio="xMidYMid meet"', false);
});

it('can render with viewBox', function () {
    Livewire::test(MySvg::class, ['viewBox' => '0 0 100 100'])
        ->assertSee('viewBox="0 0 100 100"', false);
});

it('can render with width', function () {
    Livewire::test(MySvg::class, ['width' => '100'])
        ->assertSee('width="100"', false);
});

it('can render with x', function () {
    Livewire::test(MySvg::class, ['x' => '100'])
        ->assertSee('x="100"', false);
});

it('can render with y', function () {
    Livewire::test(MySvg::class, ['y' => '100'])
        ->assertSee('y="100"', false);
});
