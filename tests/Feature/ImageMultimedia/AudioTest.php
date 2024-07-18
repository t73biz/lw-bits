<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyAudio;

it('can render', function () {
    Livewire::test(MyAudio::class)
        ->assertStatus(200);
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
