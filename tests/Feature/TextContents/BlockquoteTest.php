<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyBlockquote;

it('can render', function () {
    Livewire::test(MyBlockquote::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyBlockquote::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyBlockquote::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyBlockquote::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyBlockquote::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyBlockquote::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyBlockquote::class, ['data' => ['name' => 'main-blockquote']])
        ->assertSee('data-name="main-blockquote"', false);
});

it('can render with dir', function () {
    Livewire::test(MyBlockquote::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyBlockquote::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyBlockquote::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyBlockquote::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyBlockquote::class, ['id' => 'main-blockquote'])
        ->assertSee('id="main-blockquote"', false);
});

it('can render with language', function () {
    Livewire::test(MyBlockquote::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyBlockquote::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyBlockquote::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyBlockquote::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyBlockquote::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyBlockquote::class, ['slotAttribute' => 'main-blockquote'])
        ->assertSee('slot="main-blockquote"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyBlockquote::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyBlockquote::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyBlockquote::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyBlockquote::class, ['title' => 'main-blockquote'])
        ->assertSee('title="main-blockquote"', false);
});

it('can render with translate', function () {
    Livewire::test(MyBlockquote::class, ['translate' => true])
        ->assertSee('translate');
});

it('can render with cite', function () {
    Livewire::test(MyBlockquote::class, ['cite' => 'https://www.example.com'])
        ->assertSee('cite="https://www.example.com"', false);
});
