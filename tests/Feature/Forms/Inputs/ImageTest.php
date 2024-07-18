<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyImage;

it('can render', function () {
    Livewire::test(
        MyImage::class,
        [
            'alt' => 'A nice flower',
            'height' => '100',
            'src' => 'https://via.placeholder.com/200',
            'width' => '200',
        ])
        ->assertStatus(200);
});
