<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Interactive\MyDetails;

it('can render', function () {
    Livewire::test(MyDetails::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyDetails::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyDetails::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyDetails::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyDetails::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyDetails::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyDetails::class, ['data' => ['name' => 'main-details']])
        ->assertSee('data-name="main-details"', false);
});

it('can render with dir', function () {
    Livewire::test(MyDetails::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyDetails::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyDetails::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyDetails::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyDetails::class, ['id' => 'main-details'])
        ->assertSee('id="main-details"', false);
});

it('can render with language', function () {
    Livewire::test(MyDetails::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyDetails::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyDetails::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyDetails::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyDetails::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyDetails::class, ['slotAttribute' => 'main-details'])
        ->assertSee('slot="main-details"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyDetails::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyDetails::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyDetails::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyDetails::class, ['title' => 'main-details'])
        ->assertSee('title="main-details"', false);
});

it('can render with translate', function () {
    Livewire::test(MyDetails::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with open', function () {
    Livewire::test(MyDetails::class, ['open' => true])
        ->assertSee('open');
});

it('can render with name', function () {
    Livewire::test(MyDetails::class, ['name' => 'main-details'])
        ->assertSee('name="main-details"', false);
});
