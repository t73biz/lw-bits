<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyOl;

it('can render', function () {
    Livewire::test(MyOl::class)
        ->assertStatus(200);
});

it('can render with reversed', function () {
    Livewire::test(MyOl::class, ['reversed' => true])
        ->assertSee('reversed');
});

it('can render with start', function () {
    Livewire::test(MyOl::class, ['start' => 5])
        ->assertSee('start="5"', false);
});

it('can render with type', function () {
    Livewire::test(MyOl::class, ['type' => '1'])
        ->assertSee('type="1"', false);
});
