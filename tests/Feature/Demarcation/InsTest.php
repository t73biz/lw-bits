<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Demarcation\MyIns;

it('can render', function () {
    Livewire::test(MyIns::class)
        ->assertStatus(200);
});

it('can render with cite', function () {
    Livewire::test(MyIns::class, ['cite' => 'https://example.com'])
        ->assertSee('cite="https://example.com"', false);
});

it('can render with datetime', function () {
    $date = new \Carbon\Carbon();
    $dateNow = $date->now();
    Livewire::test(MyIns::class, ['datetime' => $dateNow])
        ->assertSee('datetime="'.$dateNow->toDateTimeLocalString().'"', false);
});
