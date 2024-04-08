<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MySpan;

it('can render', function () {
    Livewire::test(MySpan::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MySpan::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MySpan::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MySpan::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MySpan::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MySpan::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MySpan::class, ['data' => ['name' => 'main-span']])
        ->assertSee('data-name="main-span"', false);
});

it('can render with dir', function () {
    Livewire::test(MySpan::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MySpan::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MySpan::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MySpan::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MySpan::class, ['id' => 'main-span'])
        ->assertSee('id="main-span"', false);
});

it('can render with language', function () {
    Livewire::test(MySpan::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MySpan::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MySpan::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MySpan::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MySpan::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MySpan::class, ['slotAttribute' => 'main-span'])
        ->assertSee('slot="main-span"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MySpan::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MySpan::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MySpan::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MySpan::class, ['title' => 'main-span'])
        ->assertSee('title="main-span"', false);
});

it('can render with translate', function () {
    Livewire::test(MySpan::class, ['translate' => true])
        ->assertSee('translate');
});
