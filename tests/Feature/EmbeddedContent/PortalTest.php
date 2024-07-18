<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyPortal;

it('can render', function () {
    Livewire::test(MyPortal::class)
        ->assertStatus(200);
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyPortal::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});
