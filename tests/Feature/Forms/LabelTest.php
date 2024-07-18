<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyLabel;

it('can render', function () {
    Livewire::test(MyLabel::class)
        ->assertStatus(200);
});

it('can render with for', function () {
    Livewire::test(MyLabel::class, ['for' => 'main-label'])
        ->assertSee('for="main-label"', false);
});
