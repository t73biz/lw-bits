<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyVideo;

it('can render', function () {
    Livewire::test(MyVideo::class)
        ->assertStatus(200);
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
