<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Scripting\MyNoscript;

it('can render', function () {
    Livewire::test(MyNoscript::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyNoscript::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyNoscript::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyNoscript::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyNoscript::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyNoscript::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyNoscript::class, ['data' => ['name' => 'main-noscript']])
        ->assertSee('data-name="main-noscript"', false);
});

it('can render with dir', function () {
    Livewire::test(MyNoscript::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyNoscript::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyNoscript::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyNoscript::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyNoscript::class, ['id' => 'main-noscript'])
        ->assertSee('id="main-noscript"', false);
});

it('can render with language', function () {
    Livewire::test(MyNoscript::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyNoscript::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyNoscript::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyNoscript::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyNoscript::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyNoscript::class, ['slotAttribute' => 'main-noscript'])
        ->assertSee('slot="main-noscript"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyNoscript::class, ['spellcheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyNoscript::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyNoscript::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyNoscript::class, ['title' => 'main-noscript'])
        ->assertSee('title="main-noscript"', false);
});

it('can render with translate', function () {
    Livewire::test(MyNoscript::class, ['translate' => true])
        ->assertSee('translate');
});
