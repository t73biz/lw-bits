<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyIframe;

it('can render', function () {
    Livewire::test(MyIframe::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyIframe::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyIframe::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyIframe::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyIframe::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyIframe::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyIframe::class, ['data' => ['name' => 'main-iframe']])
        ->assertSee('data-name="main-iframe"', false);
});

it('can render with dir', function () {
    Livewire::test(MyIframe::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyIframe::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyIframe::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyIframe::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyIframe::class, ['id' => 'main-iframe'])
        ->assertSee('id="main-iframe"', false);
});

it('can render with language', function () {
    Livewire::test(MyIframe::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyIframe::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyIframe::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyIframe::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyIframe::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyIframe::class, ['slotAttribute' => 'main-iframe'])
        ->assertSee('slot="main-iframe"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyIframe::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyIframe::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyIframe::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyIframe::class, ['title' => 'main-iframe'])
        ->assertSee('title="main-iframe"', false);
});

it('can render with translate', function () {
    Livewire::test(MyIframe::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with allow', function () {
    Livewire::test(MyIframe::class, ['allow' => 'autoplay'])
        ->assertSee('allow="autoplay"', false);
});

it('can render with height', function () {
    Livewire::test(MyIframe::class, ['height' => 100])
        ->assertSee('height="100"', false);
});

it('can render with loading', function () {
    Livewire::test(MyIframe::class, ['loading' => 'lazy'])
        ->assertSee('loading="lazy"', false);
});

it('can render with name', function () {
    Livewire::test(MyIframe::class, ['name' => 'main-iframe'])
        ->assertSee('name="main-iframe"', false);
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyIframe::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});

it('can render with sandbox', function () {
    Livewire::test(MyIframe::class, ['sandbox' => 'allow-scripts'])
        ->assertSee('sandbox="allow-scripts"', false);
});

it('can render with src', function () {
    Livewire::test(MyIframe::class, ['src' => 'https://www.example.com'])
        ->assertSee('src="https://www.example.com"', false);
});

it('can render with srcdoc', function () {
    Livewire::test(MyIframe::class, ['srcdoc' => '<p>Example</p>'])
        ->assertSee('srcdoc="<p>Example</p>"', false);
});

it('can render with width', function () {
    Livewire::test(MyIframe::class, ['width' => 100])
        ->assertSee('width="100"', false);
});

it('throws exception when loading is invalid', function () {
    $this->expectExceptionMessage('The loading attribute must be either eager or lazy.');
    Livewire::test(MyIframe::class, ['loading' => 'foo']);
});

it('throws exception when referrerpolicy is invalid', function () {
    $this->expectExceptionMessage('The referrerpolicy attribute must be one of no-referrer, no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, or unsafe-url.');
    Livewire::test(MyIframe::class, ['referrerpolicy' => 'foo']);
});

it('throws exception when sandbox is invalid', function () {
    $this->expectExceptionMessage('The sandbox attribute must be one or more of allow-downloads, allow-forms, allow-modals, allow-orientation-lock, allow-pointer-lock, allow-popups, allow-popups-to-escape-sandbox, allow-presentation, allow-same-origin, allow-scripts, allow-storage-access-by-user-activation, allow-top-navigation, allow-top-navigation-by-user-activation, or allow-top-navigation-to-custom-protocols.');
    Livewire::test(MyIframe::class, ['sandbox' => 'foo']);
});
