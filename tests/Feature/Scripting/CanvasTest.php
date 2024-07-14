<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Scripting\MyCanvas;

it('can render', function () {
    Livewire::test(MyCanvas::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyCanvas::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyCanvas::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyCanvas::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyCanvas::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyCanvas::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyCanvas::class, ['data' => ['name' => 'main-canvas']])
        ->assertSee('data-name="main-canvas"', false);
});

it('can render with dir', function () {
    Livewire::test(MyCanvas::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyCanvas::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyCanvas::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyCanvas::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyCanvas::class, ['id' => 'main-canvas'])
        ->assertSee('id="main-canvas"', false);
});

it('can render with language', function () {
    Livewire::test(MyCanvas::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyCanvas::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyCanvas::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyCanvas::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyCanvas::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyCanvas::class, ['slotAttribute' => 'main-canvas'])
        ->assertSee('slot="main-canvas"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyCanvas::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyCanvas::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyCanvas::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyCanvas::class, ['title' => 'main-canvas'])
        ->assertSee('title="main-canvas"', false);
});

it('can render with translate', function () {
    Livewire::test(MyCanvas::class, ['translate' => 'yes'])
        ->assertSee('translate');
});
