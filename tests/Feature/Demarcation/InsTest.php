<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Demarcation\MyIns;

it('can render', function () {
    Livewire::test(MyIns::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyIns::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyIns::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyIns::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyIns::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyIns::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyIns::class, ['data' => ['name' => 'main-ins']])
        ->assertSee('data-name="main-ins"', false);
});

it('can render with dir', function () {
    Livewire::test(MyIns::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyIns::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyIns::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyIns::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyIns::class, ['id' => 'main-ins'])
        ->assertSee('id="main-ins"', false);
});

it('can render with language', function () {
    Livewire::test(MyIns::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyIns::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyIns::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyIns::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyIns::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyIns::class, ['slotAttribute' => 'main-ins'])
        ->assertSee('slot="main-ins"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyIns::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyIns::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyIns::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyIns::class, ['title' => 'main-ins'])
        ->assertSee('title="main-ins"', false);
});

it('can render with translate', function () {
    Livewire::test(MyIns::class, ['translate' => true])
        ->assertSee('translate');
});
