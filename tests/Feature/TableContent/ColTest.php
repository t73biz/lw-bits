<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyCol;

it('can render', function () {
    Livewire::test(MyCol::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyCol::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyCol::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyCol::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyCol::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyCol::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyCol::class, ['data' => ['name' => 'main-col']])
        ->assertSee('data-name="main-col"', false);
});

it('can render with dir', function () {
    Livewire::test(MyCol::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyCol::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyCol::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyCol::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyCol::class, ['id' => 'main-col'])
        ->assertSee('id="main-col"', false);
});

it('can render with language', function () {
    Livewire::test(MyCol::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyCol::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyCol::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyCol::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyCol::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyCol::class, ['slotAttribute' => 'main-col'])
        ->assertSee('slot="main-col"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyCol::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyCol::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyCol::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyCol::class, ['title' => 'main-col'])
        ->assertSee('title="main-col"', false);
});

it('can render with translate', function () {
    Livewire::test(MyCol::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with span', function () {
    Livewire::test(MyCol::class, ['span' => 2])
        ->assertSee('span="2"', false);
});
