<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyOption;

it('can render', function () {
    Livewire::test(MyOption::class)
        ->assertStatus(200);
});

it('can render with disabled', function () {
    Livewire::test(MyOption::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with label', function () {
    Livewire::test(MyOption::class, ['label' => 'Main Option'])
        ->assertSee('Main Option');
});

it('can render with selected', function () {
    Livewire::test(MyOption::class, ['selected' => true])
        ->assertSee('selected');
});
