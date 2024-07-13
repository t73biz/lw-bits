<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyAudio;

it('can render', function () {
    Livewire::test(MyAudio::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyAudio::class, ['accessKey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyAudio::class, ['autoCapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyAudio::class, ['autoFocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyAudio::class, ['contentEditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyAudio::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyAudio::class, ['data' => ['name' => 'main-audio']])
        ->assertSee('data-name="main-audio"', false);
});

it('can render with dir', function () {
    Livewire::test(MyAudio::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyAudio::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyAudio::class, ['enterKeyHint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyAudio::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyAudio::class, ['id' => 'main-audio'])
        ->assertSee('id="main-audio"', false);
});

it('can render with language', function () {
    Livewire::test(MyAudio::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyAudio::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyAudio::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyAudio::class, ['popOver' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyAudio::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyAudio::class, ['slotAttribute' => 'main-audio'])
        ->assertSee('slot="main-audio"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyAudio::class, ['spellCheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyAudio::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyAudio::class, ['tabIndex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyAudio::class, ['title' => 'main-audio'])
        ->assertSee('title="main-audio"', false);
});

it('can render with translate', function () {
    Livewire::test(MyAudio::class, ['translate' => true])
        ->assertSee('translate');
});

it('can render with autoplay', function () {
    Livewire::test(MyAudio::class, ['autoplay' => true])
        ->assertSee('autoplay');
});

it('can render with controls', function () {
    Livewire::test(MyAudio::class, ['controls' => true])
        ->assertSee('controls');
});

it('can render with controlslist nodownload', function () {
    Livewire::test(MyAudio::class, ['controlslist' => 'nodownload'])
        ->assertSee('controlslist="nodownload"', false);
});

it('can render with controlslist nofullscreen', function () {
    Livewire::test(MyAudio::class, ['controlslist' => 'nofullscreen'])
        ->assertSee('controlslist="nofullscreen"', false);
});

it('can render with controlslist noremoteplayback', function () {
    Livewire::test(MyAudio::class, ['controlslist' => 'noremoteplayback'])
        ->assertSee('controlslist="noremoteplayback"', false);
});

it('can render with controlslist all values', function () {
    Livewire::test(MyAudio::class, ['controlslist' => 'noremoteplayback nofullscreen nodownload'])
        ->assertSee('controlslist="noremoteplayback nofullscreen nodownload"', false);
});

it('can render with crossorigin', function () {
    Livewire::test(MyAudio::class, ['crossorigin' => 'anonymous'])
        ->assertSee('crossorigin="anonymous"', false);
});

it('can render with disableremoteplayback', function () {
    Livewire::test(MyAudio::class, ['disableremoteplayback' => true])
        ->assertSee('disableremoteplayback');
});

it('can render with loop', function () {
    Livewire::test(MyAudio::class, ['loop' => true])
        ->assertSee('loop');
});

it('can render with muted', function () {
    Livewire::test(MyAudio::class, ['muted' => true])
        ->assertSee('muted');
});

it('can render with preload', function () {
    Livewire::test(MyAudio::class, ['preload' => 'metadata'])
        ->assertSee('preload="metadata"', false);
});

it('can render with src', function () {
    Livewire::test(MyAudio::class, ['src' => 'https://example.com/video.mp4'])
        ->assertSee('src="https://example.com/video.mp4"', false);
});
