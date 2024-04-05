<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyNav;

it('can render', function () {
    Livewire::test(MyNav::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyNav::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyNav::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyNav::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyNav::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyNav::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyNav::class, ['data' => ['name' => 'main-nav']])
        ->assertSee('data-name="main-nav"', false);
});

it('can render with dir', function () {
    Livewire::test(MyNav::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyNav::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyNav::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyNav::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyNav::class, ['id' => 'main-nav'])
        ->assertSee('id="main-nav"', false);
});

it('can render with language', function () {
    Livewire::test(MyNav::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyNav::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyNav::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyNav::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyNav::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyNav::class, ['slotAttribute' => 'main-nav'])
        ->assertSee('slot="main-nav"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyNav::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyNav::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyNav::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyNav::class, ['title' => 'main-nav'])
        ->assertSee('title="main-nav"', false);
});

it('can render with translate', function () {
    Livewire::test(MyNav::class, ['translate' => true])
        ->assertSee('translate');
});
