<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyTfoot;

it('can render', function () {
    Livewire::test(MyTfoot::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyTfoot::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyTfoot::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyTfoot::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyTfoot::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyTfoot::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyTfoot::class, ['data' => ['name' => 'main-tfoot']])
        ->assertSee('data-name="main-tfoot"', false);
});

it('can render with dir', function () {
    Livewire::test(MyTfoot::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyTfoot::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyTfoot::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyTfoot::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyTfoot::class, ['id' => 'main-tfoot'])
        ->assertSee('id="main-tfoot"', false);
});

it('can render with language', function () {
    Livewire::test(MyTfoot::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyTfoot::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyTfoot::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyTfoot::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyTfoot::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyTfoot::class, ['slotAttribute' => 'main-tfoot'])
        ->assertSee('slot="main-tfoot"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyTfoot::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyTfoot::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyTfoot::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyTfoot::class, ['title' => 'main-tfoot'])
        ->assertSee('title="main-tfoot"', false);
});

it('can render with translate', function () {
    Livewire::test(MyTfoot::class, ['translate' => true])
        ->assertSee('translate');
});
