<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyHgroup;

it('can render', function () {
    Livewire::test(MyHgroup::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyHgroup::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyHgroup::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyHgroup::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyHgroup::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyHgroup::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyHgroup::class, ['data' => ['name' => 'main-hgroup']])
        ->assertSee('data-name="main-hgroup"', false);
});

it('can render with dir', function () {
    Livewire::test(MyHgroup::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyHgroup::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyHgroup::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyHgroup::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyHgroup::class, ['id' => 'main-hgroup'])
        ->assertSee('id="main-hgroup"', false);
});

it('can render with language', function () {
    Livewire::test(MyHgroup::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyHgroup::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyHgroup::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyHgroup::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyHgroup::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyHgroup::class, ['slotAttribute' => 'main-hgroup'])
        ->assertSee('slot="main-hgroup"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyHgroup::class, ['spellcheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyHgroup::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyHgroup::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyHgroup::class, ['title' => 'main-hgroup'])
        ->assertSee('title="main-hgroup"', false);
});

it('can render with translate', function () {
    Livewire::test(MyHgroup::class, ['translate' => true])
        ->assertSee('translate');
});
