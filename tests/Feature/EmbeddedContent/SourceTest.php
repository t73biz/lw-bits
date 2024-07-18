<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MySource;

it('can render', function () {
    Livewire::test(MySource::class)
        ->assertStatus(200);
});
it('can render with media', function () {
    Livewire::test(MySource::class, ['media' => 'screen and (min-width: 600px)'])
        ->assertSee('media="screen and (min-width: 600px)"', false);
});

it('can render with sizes', function () {
    Livewire::test(MySource::class, ['sizes' => '100vw'])
        ->assertSee('sizes="100vw"', false);
});

it('can render with srcset', function () {
    Livewire::test(MySource::class, ['srcset' => 'https://example.com 1x, https://example.com 2x'])
        ->assertSee('srcset="https://example.com 1x, https://example.com 2x"', false);
});

it('can render with type', function () {
    Livewire::test(MySource::class, ['type' => 'image/jpeg'])
        ->assertSee('type="image/jpeg"', false);
});
