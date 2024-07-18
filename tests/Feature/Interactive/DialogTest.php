<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Interactive\MyDialog;

it('can render', function () {
    Livewire::test(MyDialog::class)
        ->assertStatus(200);
});

it('can render with open', function () {
    Livewire::test(MyDialog::class, ['open' => true])
        ->assertSee('open');
});

it('throws an exception if the tabindex is set', function () {
    Livewire::test(MyDialog::class, ['open' => true, 'tabindex' => 1]);
})->throws(\Illuminate\View\ViewException::class, 'A dialog element should not have a tabindex attribute');
