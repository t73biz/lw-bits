<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyFieldset;

it('can render', function () {
    Livewire::test(MyFieldset::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyFieldset::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyFieldset::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyFieldset::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyFieldset::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyFieldset::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyFieldset::class, ['data' => ['name' => 'main-fieldset']])
        ->assertSee('data-name="main-fieldset"', false);
});

it('can render with dir', function () {
    Livewire::test(MyFieldset::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyFieldset::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyFieldset::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyFieldset::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyFieldset::class, ['id' => 'main-fieldset'])
        ->assertSee('id="main-fieldset"', false);
});

it('can render with language', function () {
    Livewire::test(MyFieldset::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyFieldset::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyFieldset::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyFieldset::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyFieldset::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyFieldset::class, ['slotAttribute' => 'main-fieldset'])
        ->assertSee('slot="main-fieldset"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyFieldset::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyFieldset::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyFieldset::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyFieldset::class, ['title' => 'main-fieldset'])
        ->assertSee('title="main-fieldset"', false);
});

it('can render with translate', function () {
    Livewire::test(MyFieldset::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with disabled', function () {
    Livewire::test(MyFieldset::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with form', function () {
    Livewire::test(MyFieldset::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with name', function () {
    Livewire::test(MyFieldset::class, ['name' => 'main-fieldset'])
        ->assertSee('name="main-fieldset"', false);
});
