<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyImg;

it('can render', function () {
    Livewire::test(MyImg::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyImg::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyImg::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyImg::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyImg::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyImg::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyImg::class, ['data' => ['name' => 'main-img']])
        ->assertSee('data-name="main-img"', false);
});

it('can render with dir', function () {
    Livewire::test(MyImg::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyImg::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyImg::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyImg::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyImg::class, ['id' => 'main-img'])
        ->assertSee('id="main-img"', false);
});

it('can render with language', function () {
    Livewire::test(MyImg::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyImg::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyImg::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyImg::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyImg::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyImg::class, ['slotAttribute' => 'main-img'])
        ->assertSee('slot="main-img"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyImg::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyImg::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyImg::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyImg::class, ['title' => 'main-img'])
        ->assertSee('title="main-img"', false);
});

it('can render with translate', function () {
    Livewire::test(MyImg::class, ['translate' => true])
        ->assertSee('translate');
});

it('can render with alt', function () {
    Livewire::test(MyImg::class, ['alt' => 'main-img'])
        ->assertSee('alt="main-img"', false);
});

it('can render with crossorigin', function () {
    Livewire::test(MyImg::class, ['crossorigin' => 'anonymous'])
        ->assertSee('crossorigin="anonymous"', false);
});

it('can render with decoding', function () {
    Livewire::test(MyImg::class, ['decoding' => 'async'])
        ->assertSee('decoding="async"', false);
});

it('can render with elementtiming', function () {
    Livewire::test(MyImg::class, ['elementtiming' => 'main-img'])
        ->assertSee('elementtiming="main-img"', false);
});

it('can render with fetchpriority', function () {
    Livewire::test(MyImg::class, ['fetchpriority' => 'high'])
        ->assertSee('fetchpriority="high"', false);
});

it('can render with height', function () {
    Livewire::test(MyImg::class, ['height' => 100])
        ->assertSee('height="100"', false);
});

it('can render with ismap', function () {
    Livewire::test(MyImg::class, ['ismap' => true])
        ->assertSee('ismap', false);
});

it('can render with loading', function () {
    Livewire::test(MyImg::class, ['loading' => 'lazy'])
        ->assertSee('loading="lazy"', false);
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyImg::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});

it('can render with sizes', function () {
    Livewire::test(MyImg::class, ['sizes' => '100vw'])
        ->assertSee('sizes="100vw"', false);
});

it('can render with src', function () {
    Livewire::test(MyImg::class, ['src' => 'https://via.placeholder.com/150'])
        ->assertSee('src="https://via.placeholder.com/150"', false);
});

it('can render with srcset', function () {
    Livewire::test(MyImg::class, ['srcset' => 'https://via.placeholder.com/150 150w'])
        ->assertSee('srcset="https://via.placeholder.com/150 150w"', false);
});

it('can render with usemap', function () {
    Livewire::test(MyImg::class, ['usemap' => '#main-img'])
        ->assertSee('usemap="#main-img"', false);
});

it('can render with width', function () {
    Livewire::test(MyImg::class, ['width' => 100])
        ->assertSee('width="100"', false);
});
