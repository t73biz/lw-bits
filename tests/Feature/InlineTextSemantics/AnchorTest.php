<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\InlineTextSemantics\MyAnchor;

it('can render', function () {
    Livewire::test(MyAnchor::class)
        ->assertStatus(200);
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
