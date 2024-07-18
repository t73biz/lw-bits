<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Scripting\MyScript;

it('can render', function () {
    Livewire::test(MyScript::class)
        ->assertStatus(200);
});

it('can render with type', function () {
    Livewire::test(MyScript::class, ['type' => 'module'])
        ->assertSee('type="module"', false);
});

it('can render with src', function () {
    Livewire::test(MyScript::class, ['src' => 'https://example.com/script.js'])
        ->assertSee('src="https://example.com/script.js"', false);
});

it('can render with async', function () {
    Livewire::test(MyScript::class, ['async' => true, 'src' => 'https://example.com/script.js'])
        ->assertSee('async');
});

it('can render with defer', function () {
    Livewire::test(MyScript::class, ['defer' => true, 'src' => 'https://example.com/script.js'])
        ->assertSee('defer');
});

it('can render with crossorigin', function () {
    Livewire::test(MyScript::class, ['crossorigin' => 'anonymous'])
        ->assertSee('crossorigin="anonymous"', false);
});

it('can render with integrity', function () {
    Livewire::test(MyScript::class, ['integrity' => 'sha256-abc123'])
        ->assertSee('integrity="sha256-abc123"', false);
});

it('can render with nomodule', function () {
    Livewire::test(MyScript::class, ['nomodule' => true])
        ->assertSee('nomodule');
});

it('can render with referrerpolicy', function () {
    Livewire::test(MyScript::class, ['referrerpolicy' => 'no-referrer'])
        ->assertSee('referrerpolicy="no-referrer"', false);
});
