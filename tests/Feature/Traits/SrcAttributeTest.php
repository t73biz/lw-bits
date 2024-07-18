<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyEmbed;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyImage;

it('can set the src attribute', function () {
    Livewire::test(MyImage::class, ['alt' => 'A nice flower', 'src' => 'https://example.com/image.jpg'])
        ->assertSee('src="https://example.com/image.jpg"', false);
});

it('can render without the src attribute set', function () {
    Livewire::test(MyEmbed::class)
        ->assertDontSee('src="', false);
});

it('throws an exception if the src attribute is not set for an image', function () {
    Livewire::test(MyImage::class, ['alt' => 'A nice flower']);
})->throws(\Illuminate\View\ViewException::class, 'The source attribute must be set.');
