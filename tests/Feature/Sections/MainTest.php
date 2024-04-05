<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyMain;

it('can render', function () {
    Livewire::test(MyMain::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyMain::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyMain::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyMain::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyMain::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyMain::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyMain::class, ['data' => ['name' => 'main-main']])
        ->assertSee('data-name="main-main"', false);
});

it('can render with dir', function () {
    Livewire::test(MyMain::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyMain::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyMain::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyMain::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyMain::class, ['id' => 'main-main'])
        ->assertSee('id="main-main"', false);
});

it('can render with language', function () {
    Livewire::test(MyMain::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyMain::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyMain::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyMain::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyMain::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyMain::class, ['slotAttribute' => 'main-main'])
        ->assertSee('slot="main-main"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyMain::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyMain::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyMain::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyMain::class, ['title' => 'main-main'])
        ->assertSee('title="main-main"', false);
});

it('can render with translate', function () {
    Livewire::test(MyMain::class, ['translate' => true])
        ->assertSee('translate');
});
