<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyLegend;

it('can render', function () {
    Livewire::test(MyLegend::class)
        ->assertStatus(200);
});
