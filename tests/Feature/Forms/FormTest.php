<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyForm;

it('can render', function () {
    Livewire::test(MyForm::class)
        ->assertStatus(200);
});
