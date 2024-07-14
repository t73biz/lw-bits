<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyVideo;

it('can render', function () {
    Livewire::test(MyVideo::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyVideo::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyVideo::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyVideo::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyVideo::class, ['contenteditable' => true])
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
    Livewire::test(MyVideo::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyVideo::class, ['enterkeyhint' => 'enter'])
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
    Livewire::test(MyVideo::class, ['popover' => true])
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
    Livewire::test(MyVideo::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyVideo::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyVideo::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyVideo::class, ['title' => 'main-video'])
        ->assertSee('title="main-video"', false);
});

it('can render with translate', function () {
    Livewire::test(MyVideo::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with autoplay', function () {
    Livewire::test(MyVideo::class, ['autoplay' => true])
        ->assertSee('autoplay');
});

it('can render with controls', function () {
    Livewire::test(MyVideo::class, ['controls' => true])
        ->assertSee('controls');
});

it('can render with controlslist nodownload', function () {
    Livewire::test(MyVideo::class, ['controlslist' => 'nodownload'])
        ->assertSee('controlslist="nodownload"', false);
});

it('can render with controlslist nofullscreen', function () {
    Livewire::test(MyVideo::class, ['controlslist' => 'nofullscreen'])
        ->assertSee('controlslist="nofullscreen"', false);
});

it('can render with controlslist noremoteplayback', function () {
    Livewire::test(MyVideo::class, ['controlslist' => 'noremoteplayback'])
        ->assertSee('controlslist="noremoteplayback"', false);
});

it('can render with controlslist all values', function () {
    Livewire::test(MyVideo::class, ['controlslist' => 'noremoteplayback nofullscreen nodownload'])
        ->assertSee('controlslist="noremoteplayback nofullscreen nodownload"', false);
});

it('can render with crossorigin', function () {
    Livewire::test(MyVideo::class, ['crossorigin' => 'anonymous'])
        ->assertSee('crossorigin="anonymous"', false);
});

it('can render with disablepictureinpicture', function () {
    Livewire::test(MyVideo::class, ['disablepictureinpicture' => true])
        ->assertSee('disablepictureinpicture');
});

it('can render with disableremoteplayback', function () {
    Livewire::test(MyVideo::class, ['disableremoteplayback' => true])
        ->assertSee('disableremoteplayback');
});

it('can render with height', function () {
    Livewire::test(MyVideo::class, ['height' => 100])
        ->assertSee('height="100"', false);
});

it('can render with loop', function () {
    Livewire::test(MyVideo::class, ['loop' => true])
        ->assertSee('loop');
});

it('can render with muted', function () {
    Livewire::test(MyVideo::class, ['muted' => true])
        ->assertSee('muted');
});

it('can render with playsinline', function () {
    Livewire::test(MyVideo::class, ['playsinline' => true])
        ->assertSee('playsinline');
});

it('can render with poster', function () {
    Livewire::test(MyVideo::class, ['poster' => 'https://example.com/poster.jpg'])
        ->assertSee('poster="https://example.com/poster.jpg"', false);
});

it('can render with preload', function () {
    Livewire::test(MyVideo::class, ['preload' => 'metadata'])
        ->assertSee('preload="metadata"', false);
});

it('can render with src', function () {
    Livewire::test(MyVideo::class, ['src' => 'https://example.com/video.mp4'])
        ->assertSee('src="https://example.com/video.mp4"', false);
});

it('can render with width', function () {
    Livewire::test(MyVideo::class, ['width' => 200])
        ->assertSee('width="200"', false);
});
