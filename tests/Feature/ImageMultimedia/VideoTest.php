<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyVideo;

it('can render', function () {
    Livewire::test(MyVideo::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyVideo::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyVideo::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyVideo::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyVideo::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyVideo::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyVideo::class, ['data' => ['name' => 'main-video']])
        ->assertSee('data-name="main-video"', false);
});

it('can render with dir', function () {
    Livewire::test(MyVideo::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyVideo::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyVideo::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyVideo::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyVideo::class, ['id' => 'main-video'])
        ->assertSee('id="main-video"', false);
});

it('can render with language', function () {
    Livewire::test(MyVideo::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyVideo::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyVideo::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyVideo::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyVideo::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyVideo::class, ['slotAttribute' => 'main-video'])
        ->assertSee('slot="main-video"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyVideo::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyVideo::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyVideo::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyVideo::class, ['title' => 'main-video'])
        ->assertSee('title="main-video"', false);
});

it('can render with translate', function () {
    Livewire::test(MyVideo::class, ['translate' => true])
        ->assertSee('translate');
});
