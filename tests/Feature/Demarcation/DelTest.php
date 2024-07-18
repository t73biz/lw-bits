<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Demarcation\MyDel;

it('can render', function () {
    Livewire::test(MyDel::class)
        ->assertStatus(200);
});

it('can render with cite', function () {
    Livewire::test(MyDel::class, ['cite' => 'https://example.com'])
        ->assertSee('cite="https://example.com"', false);
});

it('can render with datetime', function () {
    $date = new \Carbon\Carbon();
    $dateNow = $date->now();
    Livewire::test(MyDel::class, ['datetime' => $dateNow])
        ->assertSee('datetime="'.$dateNow->toDateTimeLocalString().'"', false);
});
