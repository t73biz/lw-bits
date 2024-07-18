<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyProgress;

it('can render', function () {
    Livewire::test(MyProgress::class)
        ->assertStatus(200);
});

it('can render with max', function () {
    Livewire::test(MyProgress::class, ['max' => 100])
        ->assertSee('max="100"', false);
});

it('can render with value', function () {
    Livewire::test(MyProgress::class, ['value' => 50])
        ->assertSee('value="50"', false);
});
