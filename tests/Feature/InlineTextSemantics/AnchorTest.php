<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyAnchor;

it('can render', function () {
    Livewire::test(MyAnchor::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyAnchor::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyAnchor::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyAnchor::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyAnchor::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyAnchor::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyAnchor::class, ['data' => ['name' => 'main-anchor']])
        ->assertSee('data-name="main-anchor"', false);
});

it('can render with dir', function () {
    Livewire::test(MyAnchor::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyAnchor::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyAnchor::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyAnchor::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyAnchor::class, ['id' => 'main-anchor'])
        ->assertSee('id="main-anchor"', false);
});

it('can render with language', function () {
    Livewire::test(MyAnchor::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyAnchor::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyAnchor::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyAnchor::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyAnchor::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyAnchor::class, ['slotAttribute' => 'main-anchor'])
        ->assertSee('slot="main-anchor"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyAnchor::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyAnchor::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyAnchor::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyAnchor::class, ['title' => 'main-anchor'])
        ->assertSee('title="main-anchor"', false);
});

it('can render with translate', function () {
    Livewire::test(MyAnchor::class, ['translate' => true])
        ->assertSee('translate');
});
