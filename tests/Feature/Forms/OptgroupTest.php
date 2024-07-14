<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyOptgroup;

it('can render', function () {
    Livewire::test(MyOptgroup::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyOptgroup::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyOptgroup::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyOptgroup::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyOptgroup::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyOptgroup::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyOptgroup::class, ['data' => ['name' => 'main-optgroup']])
        ->assertSee('data-name="main-optgroup"', false);
});

it('can render with dir', function () {
    Livewire::test(MyOptgroup::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyOptgroup::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyOptgroup::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyOptgroup::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyOptgroup::class, ['id' => 'main-optgroup'])
        ->assertSee('id="main-optgroup"', false);
});

it('can render with language', function () {
    Livewire::test(MyOptgroup::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyOptgroup::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyOptgroup::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyOptgroup::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyOptgroup::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyOptgroup::class, ['slotAttribute' => 'main-optgroup'])
        ->assertSee('slot="main-optgroup"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyOptgroup::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyOptgroup::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyOptgroup::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyOptgroup::class, ['title' => 'main-optgroup'])
        ->assertSee('title="main-optgroup"', false);
});

it('can render with translate', function () {
    Livewire::test(MyOptgroup::class, ['translate' => true])
        ->assertSee('translate');
});
