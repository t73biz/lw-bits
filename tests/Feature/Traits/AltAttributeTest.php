<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyImage;

it('can render with alt', function () {
    Livewire::test(MyImage::class, ['alt' => 'A nice flower', 'src' => 'https://via.placeholder.com/200'])
        ->assertSee('alt="A nice flower"', false);
});
