<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyArea;

it('can render', function () {
    Livewire::test(MyArea::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyArea::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyArea::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyArea::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyArea::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyArea::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyArea::class, ['data' => ['name' => 'main-area']])
        ->assertSee('data-name="main-area"', false);
});

it('can render with dir', function () {
    Livewire::test(MyArea::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyArea::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyArea::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyArea::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyArea::class, ['id' => 'main-area'])
        ->assertSee('id="main-area"', false);
});

it('can render with language', function () {
    Livewire::test(MyArea::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyArea::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyArea::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyArea::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyArea::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyArea::class, ['slotAttribute' => 'main-area'])
        ->assertSee('slot="main-area"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyArea::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyArea::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyArea::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyArea::class, ['title' => 'main-area'])
        ->assertSee('title="main-area"', false);
});

it('can render with translate', function () {
    Livewire::test(MyArea::class, ['translate' => true])
        ->assertSee('translate');
});

it('can render with alt', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'alt' => 'example'])
        ->assertSee('alt="example"', false);
});

it('can render with coords', function () {
    Livewire::test(MyArea::class, ['shape' => 'rect', 'coords' => '0,0,82,126'])
        ->assertSee('coords="0,0,82,126"', false);
});

it('can render with download', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'download' => true, 'alt' => 'example'])
        ->assertSee('download');
});

it('can render with href', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'alt' => 'example'])
        ->assertSee('href="https://www.example.com"', false);
});

it('can render with ping', function () {
    Livewire::test(MyArea::class, [
        'href' => 'https://www.example.com',
        'ping' => 'https://www.example.com',
        'alt' => 'example',
    ])
        ->assertSee('ping="https://www.example.com"', false);
});

it('can render with rel', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'rel' => 'external', 'alt' => 'example'])
        ->assertSee('rel="external"', false);
});

it('can render with shape', function () {
    Livewire::test(MyArea::class, ['shape' => 'rect'])
        ->assertSee('shape="rect"', false);
});

it('can render with target', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'target' => '_blank', 'alt' => 'example'])
        ->assertSee('target="_blank"', false);
});

it('can render with download and ping', function () {
    Livewire::test(MyArea::class, [
        'href' => 'https://www.example.com',
        'download' => true,
        'ping' => 'https://www.example.com',
        'alt' => 'example',
    ])
        ->assertSee('download')
        ->assertSee('ping="https://www.example.com"', false);
});

it('throws an exception when alt is not supplied for href', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com']);
})->throws(\Illuminate\View\ViewException::class, 'The alt attribute is required if the href attribute is used');
