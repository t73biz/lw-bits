<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\EmbeddedContent\MyEmbed;

it('can render', function () {
    Livewire::test(MyEmbed::class)
        ->assertStatus(200);
});
