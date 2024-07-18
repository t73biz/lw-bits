<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyImage;

it('can render with height', function () {
    Livewire::test(MyImage::class, ['alt' => 'A nice flower', 'height' => '100', 'src' => 'https://via.placeholder.com/200'])
        ->assertSee('height="100"', false);
});

it('can render with width', function () {
    Livewire::test(MyImage::class, ['alt' => 'A nice flower', 'width' => '200', 'src' => 'https://via.placeholder.com/200'])
        ->assertSee('width="200"', false);
});
