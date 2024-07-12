<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\DocumentMetadata\MyStyle;

it('can render', function () {
    Livewire::test(MyStyle::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyStyle::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyStyle::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyStyle::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyStyle::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyStyle::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyStyle::class, ['data' => ['name' => 'main-style']])
        ->assertSee('data-name="main-style"', false);
});

it('can render with dir', function () {
    Livewire::test(MyStyle::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyStyle::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyStyle::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyStyle::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyStyle::class, ['id' => 'main-style'])
        ->assertSee('id="main-style"', false);
});

it('can render with language', function () {
    Livewire::test(MyStyle::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyStyle::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyStyle::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyStyle::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyStyle::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyStyle::class, ['slotAttribute' => 'main-style'])
        ->assertSee('slot="main-style"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyStyle::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyStyle::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyStyle::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyStyle::class, ['title' => 'main-style'])
        ->assertSee('title="main-style"', false);
});

it('can render with translate', function () {
    Livewire::test(MyStyle::class, ['translate' => true])
        ->assertSee('translate');
});
