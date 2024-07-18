<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyOptgroup;

it('can render', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo'])
        ->assertStatus(200);
});

it('can render with label', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'main-optgroup'])
        ->assertSee('label="main-optgroup"', false);
});
