<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyArticle;

it('can render', function () {
    Livewire::test(MyArticle::class)
        ->assertStatus(200);
});
