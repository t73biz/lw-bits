<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Interactive\MySummary;

it('can render', function () {
    Livewire::test(MySummary::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MySummary::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MySummary::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MySummary::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MySummary::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MySummary::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MySummary::class, ['data' => ['name' => 'main-summary']])
        ->assertSee('data-name="main-summary"', false);
});

it('can render with dir', function () {
    Livewire::test(MySummary::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MySummary::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MySummary::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MySummary::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MySummary::class, ['id' => 'main-summary'])
        ->assertSee('id="main-summary"', false);
});

it('can render with language', function () {
    Livewire::test(MySummary::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MySummary::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MySummary::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MySummary::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MySummary::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MySummary::class, ['slotAttribute' => 'main-summary'])
        ->assertSee('slot="main-summary"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MySummary::class, ['spellcheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MySummary::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MySummary::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MySummary::class, ['title' => 'main-summary'])
        ->assertSee('title="main-summary"', false);
});

it('can render with translate', function () {
    Livewire::test(MySummary::class, ['translate' => true])
        ->assertSee('translate');
});
