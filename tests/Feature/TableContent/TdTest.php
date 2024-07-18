<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTd;

it('can render', function () {
    Livewire::test(MyTd::class)
        ->assertStatus(200);
});

it('can render with colspan', function () {
    Livewire::test(MyTd::class, ['colspan' => 2])
        ->assertSee('colspan="2"', false);
});

it('can reset colspan', function () {
    Livewire::test(MyTd::class, ['colspan' => 1001])
        ->assertDontSee('colspan="1001"', false)
        ->assertSee('colspan="1"', false);
});

it('can render with headers', function () {
    Livewire::test(MyTd::class, ['headers' => 'header1 header2'])
        ->assertSee('headers="header1 header2"', false);
});

it('can render with rowspan', function () {
    Livewire::test(MyTd::class, ['rowspan' => 2])
        ->assertSee('rowspan="2"', false);
});

it('can reset rowspan', function () {
    Livewire::test(MyTd::class, ['rowspan' => 65535])
        ->assertDontSee('rowspan="65535"', false)
        ->assertSee('rowspan="65534"', false);
});
