<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyArea;

it('can render', function () {
    Livewire::test(MyArea::class)
        ->assertStatus(200);
});

it('can render with alt', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'alt' => 'example'])
        ->assertSee('alt="example"', false);
});

it('can render with coords', function () {
    Livewire::test(MyArea::class, ['shape' => 'rect', 'coords' => '0,0,82,126'])
        ->assertSee('coords="0,0,82,126"', false);
});

it('can render with download', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'download' => true, 'alt' => 'example'])
        ->assertSee('download');
});

it('can render with href', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'alt' => 'example'])
        ->assertSee('href="https://www.example.com"', false);
});

it('can render with ping', function () {
    Livewire::test(MyArea::class, [
        'href' => 'https://www.example.com',
        'ping' => 'https://www.example.com',
        'alt' => 'example',
    ])
        ->assertSee('ping="https://www.example.com"', false);
});

it('can render with rel', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'rel' => 'external', 'alt' => 'example'])
        ->assertSee('rel="external"', false);
});

it('can render with shape', function () {
    Livewire::test(MyArea::class, ['shape' => 'rect'])
        ->assertSee('shape="rect"', false);
});

it('can render with target', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com', 'target' => '_blank', 'alt' => 'example'])
        ->assertSee('target="_blank"', false);
});

it('can render with download and ping', function () {
    Livewire::test(MyArea::class, [
        'href' => 'https://www.example.com',
        'download' => true,
        'ping' => 'https://www.example.com',
        'alt' => 'example',
    ])
        ->assertSee('download')
        ->assertSee('ping="https://www.example.com"', false);
});

it('throws an exception when alt is not supplied for href', function () {
    Livewire::test(MyArea::class, ['href' => 'https://www.example.com']);
})->throws(\Illuminate\View\ViewException::class, 'The alt attribute is required if the href attribute is used');
