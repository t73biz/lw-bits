<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyAbbr;

it('can render', function () {
    Livewire::test(MyAbbr::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyAbbr::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyAbbr::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyAbbr::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyAbbr::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyAbbr::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyAbbr::class, ['data' => ['name' => 'main-abbr']])
        ->assertSee('data-name="main-abbr"', false);
});

it('can render with dir', function () {
    Livewire::test(MyAbbr::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyAbbr::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyAbbr::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyAbbr::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyAbbr::class, ['id' => 'main-abbr'])
        ->assertSee('id="main-abbr"', false);
});

it('can render with language', function () {
    Livewire::test(MyAbbr::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyAbbr::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyAbbr::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyAbbr::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyAbbr::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyAbbr::class, ['slotAttribute' => 'main-abbr'])
        ->assertSee('slot="main-abbr"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyAbbr::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyAbbr::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyAbbr::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyAbbr::class, ['title' => 'main-abbr'])
        ->assertSee('title="main-abbr"', false);
});

it('can render with translate', function () {
    Livewire::test(MyAbbr::class, ['translate' => true])
        ->assertSee('translate');
});
