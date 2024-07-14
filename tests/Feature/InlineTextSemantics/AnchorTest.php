<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyAnchor;

it('can render', function () {
    Livewire::test(MyAnchor::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyAnchor::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyAnchor::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyAnchor::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyAnchor::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyAnchor::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyAnchor::class, ['data' => ['name' => 'main-anchor']])
        ->assertSee('data-name="main-anchor"', false);
});

it('can render with dir', function () {
    Livewire::test(MyAnchor::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyAnchor::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyAnchor::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyAnchor::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyAnchor::class, ['id' => 'main-anchor'])
        ->assertSee('id="main-anchor"', false);
});

it('can render with language', function () {
    Livewire::test(MyAnchor::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyAnchor::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyAnchor::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyAnchor::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyAnchor::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyAnchor::class, ['slotAttribute' => 'main-anchor'])
        ->assertSee('slot="main-anchor"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyAnchor::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyAnchor::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyAnchor::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyAnchor::class, ['title' => 'main-anchor'])
        ->assertSee('title="main-anchor"', false);
});

it('can render with translate', function () {
    Livewire::test(MyAnchor::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with download', function () {
    Livewire::test(MyAnchor::class, ['download' => 'main-anchor'])
        ->assertSee('download="main-anchor"', false);
});

it('can render with href', function () {
    Livewire::test(MyAnchor::class, ['href' => 'https://example.com'])
        ->assertSee('href="https://example.com"', false);
});

it('can render with hreflang', function () {
    Livewire::test(MyAnchor::class, ['hreflang' => 'en'])
        ->assertSee('hreflang="en"', false);
});

it('can render with ping', function () {
    Livewire::test(MyAnchor::class, ['ping' => 'https://example.com'])
        ->assertSee('ping="https://example.com"', false);
});

it('can render with referrerPolicy', function () {
    Livewire::test(MyAnchor::class, ['referrerPolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});

it('can render with rel', function () {
    Livewire::test(MyAnchor::class, ['rel' => 'noopener'])
        ->assertSee('rel="noopener"', false);
});

it('can render with target', function () {
    Livewire::test(MyAnchor::class, ['target' => '_blank'])
        ->assertSee('target="_blank"', false);
});

it('can render with type', function () {
    Livewire::test(MyAnchor::class, ['type' => 'text/html'])
        ->assertSee('type="text/html"', false);
});
