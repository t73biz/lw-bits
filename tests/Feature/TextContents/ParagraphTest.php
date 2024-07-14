<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyParagraph;

it('can render', function () {
    Livewire::test(MyParagraph::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyParagraph::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyParagraph::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyParagraph::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyParagraph::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyParagraph::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyParagraph::class, ['data' => ['name' => 'main-paragraph']])
        ->assertSee('data-name="main-paragraph"', false);
});

it('can render with dir', function () {
    Livewire::test(MyParagraph::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyParagraph::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyParagraph::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyParagraph::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyParagraph::class, ['id' => 'main-paragraph'])
        ->assertSee('id="main-paragraph"', false);
});

it('can render with language', function () {
    Livewire::test(MyParagraph::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyParagraph::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyParagraph::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyParagraph::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyParagraph::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyParagraph::class, ['slotAttribute' => 'main-paragraph'])
        ->assertSee('slot="main-paragraph"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyParagraph::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyParagraph::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyParagraph::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyParagraph::class, ['title' => 'main-paragraph'])
        ->assertSee('title="main-paragraph"', false);
});

it('can render with translate', function () {
    Livewire::test(MyParagraph::class, ['translate' => 'yes'])
        ->assertSee('translate');
});
