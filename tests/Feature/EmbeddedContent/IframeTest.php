<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyIframe;

it('can render', function () {
    Livewire::test(MyIframe::class)
        ->assertStatus(200);
});

it('can render with allow', function () {
    Livewire::test(MyIframe::class, ['allow' => 'autoplay'])
        ->assertSee('allow="autoplay"', false);
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

it('can render with srcdoc', function () {
    Livewire::test(MyIframe::class, ['srcdoc' => '<p>Example</p>'])
        ->assertSee('srcdoc="<p>Example</p>"', false);
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
