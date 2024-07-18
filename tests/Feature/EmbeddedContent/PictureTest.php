<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyPicture;

it('can render', function () {
    Livewire::test(MyPicture::class)
        ->assertStatus(200);
});
