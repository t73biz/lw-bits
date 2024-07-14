<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyTrack;

it('can render', function () {
    Livewire::test(MyTrack::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyTrack::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyTrack::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyTrack::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyTrack::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyTrack::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyTrack::class, ['data' => ['name' => 'main-track']])
        ->assertSee('data-name="main-track"', false);
});

it('can render with dir', function () {
    Livewire::test(MyTrack::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyTrack::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyTrack::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyTrack::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyTrack::class, ['id' => 'main-track'])
        ->assertSee('id="main-track"', false);
});

it('can render with language', function () {
    Livewire::test(MyTrack::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyTrack::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyTrack::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyTrack::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyTrack::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyTrack::class, ['slotAttribute' => 'main-track'])
        ->assertSee('slot="main-track"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyTrack::class, ['spellcheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyTrack::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyTrack::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyTrack::class, ['title' => 'main-track'])
        ->assertSee('title="main-track"', false);
});

it('can render with translate', function () {
    Livewire::test(MyTrack::class, ['translate' => true])
        ->assertSee('translate');
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
