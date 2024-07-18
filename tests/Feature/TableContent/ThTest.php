<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTh;

it('can render', function () {
    Livewire::test(MyTh::class)
        ->assertStatus(200);
});

it('can render with abbr', function () {
    Livewire::test(MyTh::class, ['abbr' => 'main-th'])
        ->assertSee('abbr="main-th"', false);
});

it('can render with colspan', function () {
    Livewire::test(MyTh::class, ['colspan' => 2])
        ->assertSee('colspan="2"', false);
});

it('can reset colspan if it is greater than 1000', function () {
    Livewire::test(MyTh::class, ['colspan' => 1001])
        ->assertSee('colspan="1"', false);
});

it('can render with headers', function () {
    Livewire::test(MyTh::class, ['headers' => 'main-th'])
        ->assertSee('headers="main-th"', false);
});

it('can render with rowspan', function () {
    Livewire::test(MyTh::class, ['rowspan' => 2])
        ->assertSee('rowspan="2"', false);
});

it('can reset rowspan if it is greater than 65534', function () {
    Livewire::test(MyTh::class, ['rowspan' => 65535])
        ->assertSee('rowspan="65534"', false);
});

it('can render with scope', function () {
    Livewire::test(MyTh::class, ['scope' => 'row'])
        ->assertSee('scope="row"', false);
});
