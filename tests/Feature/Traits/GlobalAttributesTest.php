<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyButton;

it('can render with accesskey', function () {
    Livewire::test(MyButton::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyButton::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyButton::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyButton::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyButton::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyButton::class, ['data' => ['name' => 'main-div']])
        ->assertSee('data-name="main-div"', false);
});

it('can render with dir', function () {
    Livewire::test(MyButton::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyButton::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyButton::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyButton::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyButton::class, ['id' => 'main-div'])
        ->assertSee('id="main-div"', false);
});

it('can render with language', function () {
    Livewire::test(MyButton::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyButton::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyButton::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyButton::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyButton::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyButton::class, ['slotAttribute' => 'main-div'])
        ->assertSee('slot="main-div"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyButton::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyButton::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyButton::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyButton::class, ['title' => 'main-div'])
        ->assertSee('title="main-div"', false);
});

it('can render with translate', function () {
    Livewire::test(MyButton::class, ['translate' => 'yes'])
        ->assertSee('translate');
});
