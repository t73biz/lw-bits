<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyFigcaption;

it('can render', function () {
    Livewire::test(MyFigcaption::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyFigcaption::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyFigcaption::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyFigcaption::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyFigcaption::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyFigcaption::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyFigcaption::class, ['data' => ['name' => 'main-figcaption']])
        ->assertSee('data-name="main-figcaption"', false);
});

it('can render with dir', function () {
    Livewire::test(MyFigcaption::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyFigcaption::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyFigcaption::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyFigcaption::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyFigcaption::class, ['id' => 'main-figcaption'])
        ->assertSee('id="main-figcaption"', false);
});

it('can render with language', function () {
    Livewire::test(MyFigcaption::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyFigcaption::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyFigcaption::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyFigcaption::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyFigcaption::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyFigcaption::class, ['slotAttribute' => 'main-figcaption'])
        ->assertSee('slot="main-figcaption"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyFigcaption::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyFigcaption::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyFigcaption::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyFigcaption::class, ['title' => 'main-figcaption'])
        ->assertSee('title="main-figcaption"', false);
});

it('can render with translate', function () {
    Livewire::test(MyFigcaption::class, ['translate' => 'yes'])
        ->assertSee('translate');
});
