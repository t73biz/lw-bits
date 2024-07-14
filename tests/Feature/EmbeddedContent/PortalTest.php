<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyPortal;

it('can render', function () {
    Livewire::test(MyPortal::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyPortal::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyPortal::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyPortal::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyPortal::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyPortal::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyPortal::class, ['data' => ['name' => 'main-portal']])
        ->assertSee('data-name="main-portal"', false);
});

it('can render with dir', function () {
    Livewire::test(MyPortal::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyPortal::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyPortal::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyPortal::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyPortal::class, ['id' => 'main-portal'])
        ->assertSee('id="main-portal"', false);
});

it('can render with language', function () {
    Livewire::test(MyPortal::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyPortal::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyPortal::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyPortal::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyPortal::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyPortal::class, ['slotAttribute' => 'main-portal'])
        ->assertSee('slot="main-portal"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyPortal::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyPortal::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyPortal::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyPortal::class, ['title' => 'main-portal'])
        ->assertSee('title="main-portal"', false);
});

it('can render with translate', function () {
    Livewire::test(MyPortal::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with src', function () {
    Livewire::test(MyPortal::class, ['src' => 'https://www.example.com'])
        ->assertSee('src="https://www.example.com"', false);
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyPortal::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});
