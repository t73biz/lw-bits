<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MySelect;

it('can render', function () {
    Livewire::test(MySelect::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MySelect::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MySelect::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MySelect::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MySelect::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MySelect::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MySelect::class, ['data' => ['name' => 'main-select']])
        ->assertSee('data-name="main-select"', false);
});

it('can render with dir', function () {
    Livewire::test(MySelect::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MySelect::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MySelect::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MySelect::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MySelect::class, ['id' => 'main-select'])
        ->assertSee('id="main-select"', false);
});

it('can render with language', function () {
    Livewire::test(MySelect::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MySelect::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MySelect::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MySelect::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MySelect::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MySelect::class, ['slotAttribute' => 'main-select'])
        ->assertSee('slot="main-select"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MySelect::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MySelect::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MySelect::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MySelect::class, ['title' => 'main-select'])
        ->assertSee('title="main-select"', false);
});

it('can render with translate', function () {
    Livewire::test(MySelect::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with disabled', function () {
    Livewire::test(MySelect::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with form', function () {
    Livewire::test(MySelect::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with multiple', function () {
    Livewire::test(MySelect::class, ['multiple' => true])
        ->assertSee('multiple');
});

it('can render with name', function () {
    Livewire::test(MySelect::class, ['name' => 'main-select'])
        ->assertSee('name="main-select"', false);
});

it('can render with required', function () {
    Livewire::test(MySelect::class, ['required' => true])
        ->assertSee('required');
});

it('can render with size', function () {
    Livewire::test(MySelect::class, ['size' => 5])
        ->assertSee('size="5"', false);
});
