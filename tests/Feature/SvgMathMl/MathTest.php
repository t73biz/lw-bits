<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\SvgMathMl\MyMath;

it('can render', function () {
    Livewire::test(MyMath::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyMath::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyMath::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyMath::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyMath::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyMath::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyMath::class, ['data' => ['name' => 'main-math']])
        ->assertSee('data-name="main-math"', false);
});

it('can render with dir', function () {
    Livewire::test(MyMath::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyMath::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyMath::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyMath::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyMath::class, ['id' => 'main-math'])
        ->assertSee('id="main-math"', false);
});

it('can render with language', function () {
    Livewire::test(MyMath::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyMath::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyMath::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyMath::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyMath::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyMath::class, ['slotAttribute' => 'main-math'])
        ->assertSee('slot="main-math"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyMath::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyMath::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyMath::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyMath::class, ['title' => 'main-math'])
        ->assertSee('title="main-math"', false);
});

it('can render with translate', function () {
    Livewire::test(MyMath::class, ['translate' => true])
        ->assertSee('translate');
});
