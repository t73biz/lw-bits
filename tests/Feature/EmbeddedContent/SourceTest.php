<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MySource;

it('can render', function () {
    Livewire::test(MySource::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MySource::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MySource::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MySource::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MySource::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MySource::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MySource::class, ['data' => ['name' => 'main-source']])
        ->assertSee('data-name="main-source"', false);
});

it('can render with dir', function () {
    Livewire::test(MySource::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MySource::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MySource::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MySource::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MySource::class, ['id' => 'main-source'])
        ->assertSee('id="main-source"', false);
});

it('can render with language', function () {
    Livewire::test(MySource::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MySource::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MySource::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MySource::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MySource::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MySource::class, ['slotAttribute' => 'main-source'])
        ->assertSee('slot="main-source"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MySource::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MySource::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MySource::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MySource::class, ['title' => 'main-source'])
        ->assertSee('title="main-source"', false);
});

it('can render with translate', function () {
    Livewire::test(MySource::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with height', function () {
    Livewire::test(MySource::class, ['height' => 100])
        ->assertSee('height="100"', false);
});

it('can render with media', function () {
    Livewire::test(MySource::class, ['media' => 'screen and (min-width: 600px)'])
        ->assertSee('media="screen and (min-width: 600px)"', false);
});

it('can render with sizes', function () {
    Livewire::test(MySource::class, ['sizes' => '100vw'])
        ->assertSee('sizes="100vw"', false);
});

it('can render with src', function () {
    Livewire::test(MySource::class, ['src' => 'https://example.com'])
        ->assertSee('src="https://example.com"', false);
});

it('can render with srcset', function () {
    Livewire::test(MySource::class, ['srcset' => 'https://example.com 1x, https://example.com 2x'])
        ->assertSee('srcset="https://example.com 1x, https://example.com 2x"', false);
});

it('can render with type', function () {
    Livewire::test(MySource::class, ['type' => 'image/jpeg'])
        ->assertSee('type="image/jpeg"', false);
});

it('can render with width', function () {
    Livewire::test(MySource::class, ['width' => 100])
        ->assertSee('width="100"', false);
});
