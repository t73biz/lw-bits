<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Demarcation\MyDel;

it('can render', function () {
    Livewire::test(MyDel::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyDel::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyDel::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyDel::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyDel::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyDel::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyDel::class, ['data' => ['name' => 'main-del']])
        ->assertSee('data-name="main-del"', false);
});

it('can render with dir', function () {
    Livewire::test(MyDel::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyDel::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyDel::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyDel::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyDel::class, ['id' => 'main-del'])
        ->assertSee('id="main-del"', false);
});

it('can render with language', function () {
    Livewire::test(MyDel::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyDel::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyDel::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyDel::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyDel::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyDel::class, ['slotAttribute' => 'main-del'])
        ->assertSee('slot="main-del"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyDel::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyDel::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyDel::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyDel::class, ['title' => 'main-del'])
        ->assertSee('title="main-del"', false);
});

it('can render with translate', function () {
    Livewire::test(MyDel::class, ['translate' => 'yes'])
        ->assertSee('translate');
});
