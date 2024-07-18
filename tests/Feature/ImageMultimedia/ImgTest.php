<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyImg;

it('can render', function () {
    Livewire::test(MyImg::class)
        ->assertStatus(200);
});

it('can render with alt', function () {
    Livewire::test(MyImg::class, ['alt' => 'main-img'])
        ->assertSee('alt="main-img"', false);
});

it('can render with crossorigin', function () {
    Livewire::test(MyImg::class, ['crossorigin' => 'anonymous'])
        ->assertSee('crossorigin="anonymous"', false);
});

it('can render with decoding', function () {
    Livewire::test(MyImg::class, ['decoding' => 'async'])
        ->assertSee('decoding="async"', false);
});

it('can render with elementtiming', function () {
    Livewire::test(MyImg::class, ['elementtiming' => 'main-img'])
        ->assertSee('elementtiming="main-img"', false);
});

it('can render with fetchpriority', function () {
    Livewire::test(MyImg::class, ['fetchpriority' => 'high'])
        ->assertSee('fetchpriority="high"', false);
});

it('can render with height', function () {
    Livewire::test(MyImg::class, ['height' => 100])
        ->assertSee('height="100"', false);
});

it('can render with ismap', function () {
    Livewire::test(MyImg::class, ['ismap' => true])
        ->assertSee('ismap', false);
});

it('can render with loading', function () {
    Livewire::test(MyImg::class, ['loading' => 'lazy'])
        ->assertSee('loading="lazy"', false);
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyImg::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});

it('can render with sizes', function () {
    Livewire::test(MyImg::class, ['sizes' => '100vw'])
        ->assertSee('sizes="100vw"', false);
});

it('can render with src', function () {
    Livewire::test(MyImg::class, ['src' => 'https://via.placeholder.com/150'])
        ->assertSee('src="https://via.placeholder.com/150"', false);
});

it('can render with srcset', function () {
    Livewire::test(MyImg::class, ['srcset' => 'https://via.placeholder.com/150 150w'])
        ->assertSee('srcset="https://via.placeholder.com/150 150w"', false);
});

it('can render with usemap', function () {
    Livewire::test(MyImg::class, ['usemap' => '#main-img'])
        ->assertSee('usemap="#main-img"', false);
});

it('can render with width', function () {
    Livewire::test(MyImg::class, ['width' => 100])
        ->assertSee('width="100"', false);
});
