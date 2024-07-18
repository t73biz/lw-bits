<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MySection;

it('can render', function () {
    Livewire::test(MySection::class)
        ->assertStatus(200);
});
