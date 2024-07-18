<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\TextContents\MyBlockquote;

it('can render', function () {
    Livewire::test(MyBlockquote::class)
        ->assertStatus(200);
});

it('can render with cite', function () {
    Livewire::test(MyBlockquote::class, ['cite' => 'https://www.example.com'])
        ->assertSee('cite="https://www.example.com"', false);
});
