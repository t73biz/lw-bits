<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyOl;

it('can render', function () {
    Livewire::test(MyOl::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyOl::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyOl::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyOl::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyOl::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyOl::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyOl::class, ['data' => ['name' => 'main-ol']])
        ->assertSee('data-name="main-ol"', false);
});

it('can render with dir', function () {
    Livewire::test(MyOl::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyOl::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyOl::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyOl::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyOl::class, ['id' => 'main-ol'])
        ->assertSee('id="main-ol"', false);
});

it('can render with language', function () {
    Livewire::test(MyOl::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyOl::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyOl::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyOl::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyOl::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyOl::class, ['slotAttribute' => 'main-ol'])
        ->assertSee('slot="main-ol"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyOl::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyOl::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyOl::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyOl::class, ['title' => 'main-ol'])
        ->assertSee('title="main-ol"', false);
});

it('can render with translate', function () {
    Livewire::test(MyOl::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with reversed', function () {
    Livewire::test(MyOl::class, ['reversed' => true])
        ->assertSee('reversed');
});

it('can render with start', function () {
    Livewire::test(MyOl::class, ['start' => 5])
        ->assertSee('start="5"', false);
});

it('can render with type', function () {
    Livewire::test(MyOl::class, ['type' => '1'])
        ->assertSee('type="1"', false);
});
