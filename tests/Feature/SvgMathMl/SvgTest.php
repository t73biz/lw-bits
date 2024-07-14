<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\SvgMathMl\MySvg;

it('can render', function () {
    Livewire::test(MySvg::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MySvg::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MySvg::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MySvg::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MySvg::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MySvg::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MySvg::class, ['data' => ['name' => 'main-svg']])
        ->assertSee('data-name="main-svg"', false);
});

it('can render with dir', function () {
    Livewire::test(MySvg::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MySvg::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MySvg::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MySvg::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MySvg::class, ['id' => 'main-svg'])
        ->assertSee('id="main-svg"', false);
});

it('can render with language', function () {
    Livewire::test(MySvg::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MySvg::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MySvg::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MySvg::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MySvg::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MySvg::class, ['slotAttribute' => 'main-svg'])
        ->assertSee('slot="main-svg"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MySvg::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MySvg::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MySvg::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MySvg::class, ['title' => 'main-svg'])
        ->assertSee('title="main-svg"', false);
});

it('can render with translate', function () {
    Livewire::test(MySvg::class, ['translate' => true])
        ->assertSee('translate');
});
