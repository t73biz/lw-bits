<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Scripting\MyScript;

it('can render', function () {
    Livewire::test(MyScript::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyScript::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyScript::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyScript::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyScript::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyScript::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyScript::class, ['data' => ['name' => 'main-script']])
        ->assertSee('data-name="main-script"', false);
});

it('can render with dir', function () {
    Livewire::test(MyScript::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyScript::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyScript::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyScript::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyScript::class, ['id' => 'main-script'])
        ->assertSee('id="main-script"', false);
});

it('can render with language', function () {
    Livewire::test(MyScript::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyScript::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyScript::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyScript::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyScript::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyScript::class, ['slotAttribute' => 'main-script'])
        ->assertSee('slot="main-script"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyScript::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyScript::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyScript::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyScript::class, ['title' => 'main-script'])
        ->assertSee('title="main-script"', false);
});

it('can render with translate', function () {
    Livewire::test(MyScript::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with type', function () {
    Livewire::test(MyScript::class, ['type' => 'module'])
        ->assertSee('type="module"', false);
});

it('can render with src', function () {
    Livewire::test(MyScript::class, ['src' => 'https://example.com/script.js'])
        ->assertSee('src="https://example.com/script.js"', false);
});

it('can render with async', function () {
    Livewire::test(MyScript::class, ['async' => true, 'src' => 'https://example.com/script.js'])
        ->assertSee('async');
});

it('can render with defer', function () {
    Livewire::test(MyScript::class, ['defer' => true, 'src' => 'https://example.com/script.js'])
        ->assertSee('defer');
});

it('can render with crossorigin', function () {
    Livewire::test(MyScript::class, ['crossorigin' => 'anonymous'])
        ->assertSee('crossorigin="anonymous"', false);
});

it('can render with integrity', function () {
    Livewire::test(MyScript::class, ['integrity' => 'sha256-abc123'])
        ->assertSee('integrity="sha256-abc123"', false);
});

it('can render with nomodule', function () {
    Livewire::test(MyScript::class, ['nomodule' => true])
        ->assertSee('nomodule');
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyScript::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});
