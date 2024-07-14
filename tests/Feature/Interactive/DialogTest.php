<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Interactive\MyDialog;

it('can render', function () {
    Livewire::test(MyDialog::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyDialog::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyDialog::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyDialog::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyDialog::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyDialog::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyDialog::class, ['data' => ['name' => 'main-dialog']])
        ->assertSee('data-name="main-dialog"', false);
});

it('can render with dir', function () {
    Livewire::test(MyDialog::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyDialog::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyDialog::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyDialog::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyDialog::class, ['id' => 'main-dialog'])
        ->assertSee('id="main-dialog"', false);
});

it('can render with language', function () {
    Livewire::test(MyDialog::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyDialog::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyDialog::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyDialog::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyDialog::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyDialog::class, ['slotAttribute' => 'main-dialog'])
        ->assertSee('slot="main-dialog"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyDialog::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyDialog::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with title', function () {
    Livewire::test(MyDialog::class, ['title' => 'main-dialog'])
        ->assertSee('title="main-dialog"', false);
});

it('can render with translate', function () {
    Livewire::test(MyDialog::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with open', function () {
    Livewire::test(MyDialog::class, ['open' => true])
        ->assertSee('open');
});

it('throws an exception if the tabindex is set', function () {
    Livewire::test(MyDialog::class, ['open' => true, 'tabindex' => 1]);
})->throws(\Illuminate\View\ViewException::class, 'A dialog element should not have a tabindex attribute');
