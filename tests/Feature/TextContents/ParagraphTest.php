<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyParagraph;

it('can render', function () {
    Livewire::test(MyParagraph::class)
        ->assertStatus(200);
});
