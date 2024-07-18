<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyTrack;

it('can render', function () {
    Livewire::test(MyTrack::class)
        ->assertStatus(200);
});

it('can render with default', function () {
    Livewire::test(MyTrack::class, ['default' => true])
        ->assertSee('default');
});

it('can render with kind', function () {
    Livewire::test(MyTrack::class, ['kind' => 'subtitles'])
        ->assertSee('kind="subtitles"', false);
});

it('can render with label', function () {
    Livewire::test(MyTrack::class, ['label' => 'main-track'])
        ->assertSee('label="main-track"', false);
});

it('can render with src', function () {
    Livewire::test(MyTrack::class, ['src' => 'main-track.vtt'])
        ->assertSee('src="main-track.vtt"', false);
});

it('can render with srclang', function () {
    Livewire::test(MyTrack::class, ['srclang' => 'en'])
        ->assertSee('srclang="en"', false);
});

it('throws an exception when srclang is not set and kind is subtitles', function () {
    Livewire::test(MyTrack::class, ['kind' => 'subtitles', 'srclang' => '']);
})->throws(
    \Illuminate\View\ViewException::class,
    'The srclang attribute must be defined when the kind attribute is set to subtitles'
);
