<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyOutput;

it('can render', function () {
    Livewire::test(MyOutput::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyOutput::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyOutput::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyOutput::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyOutput::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyOutput::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyOutput::class, ['data' => ['name' => 'main-output']])
        ->assertSee('data-name="main-output"', false);
});

it('can render with dir', function () {
    Livewire::test(MyOutput::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyOutput::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyOutput::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyOutput::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyOutput::class, ['id' => 'main-output'])
        ->assertSee('id="main-output"', false);
});

it('can render with language', function () {
    Livewire::test(MyOutput::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyOutput::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyOutput::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyOutput::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyOutput::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyOutput::class, ['slotAttribute' => 'main-output'])
        ->assertSee('slot="main-output"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyOutput::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyOutput::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyOutput::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyOutput::class, ['title' => 'main-output'])
        ->assertSee('title="main-output"', false);
});

it('can render with translate', function () {
    Livewire::test(MyOutput::class, ['translate' => true])
        ->assertSee('translate');
});
