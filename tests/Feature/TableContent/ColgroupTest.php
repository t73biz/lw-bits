<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TableContent\MyColgroup;

it('can render', function () {
    Livewire::test(MyColgroup::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyColgroup::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyColgroup::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyColgroup::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyColgroup::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyColgroup::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyColgroup::class, ['data' => ['name' => 'main-colgroup']])
        ->assertSee('data-name="main-colgroup"', false);
});

it('can render with dir', function () {
    Livewire::test(MyColgroup::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyColgroup::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyColgroup::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyColgroup::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyColgroup::class, ['id' => 'main-colgroup'])
        ->assertSee('id="main-colgroup"', false);
});

it('can render with language', function () {
    Livewire::test(MyColgroup::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyColgroup::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyColgroup::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyColgroup::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyColgroup::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyColgroup::class, ['slotAttribute' => 'main-colgroup'])
        ->assertSee('slot="main-colgroup"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyColgroup::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyColgroup::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyColgroup::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyColgroup::class, ['title' => 'main-colgroup'])
        ->assertSee('title="main-colgroup"', false);
});

it('can render with translate', function () {
    Livewire::test(MyColgroup::class, ['translate' => 'yes'])
        ->assertSee('translate');
});
