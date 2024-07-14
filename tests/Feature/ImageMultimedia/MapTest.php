<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\ImageMultimedia\MyMap;

it('can render', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map'])
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'data' => ['name' => 'main-map']])
        ->assertSee('data-name="main-map"', false);
});

it('can render with dir', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'id' => 'my-map'])
        ->assertSee('id="my-map"  name="my-map"', false);
});

it('can render with language', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'slotAttribute' => 'main-map'])
        ->assertSee('slot="main-map"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'spellcheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'title' => 'main-map'])
        ->assertSee('title="main-map"', false);
});

it('can render with translate', function () {
    Livewire::test(MyMap::class, ['name' => 'my-map', 'translate' => true])
        ->assertSee('translate');
});

it('can render with name', function () {
    Livewire::test(MyMap::class, ['name' => 'main-map'])
        ->assertSee('name="main-map"', false);
});

it('Throws an exception for no name', function () {
    Livewire::test(MyMap::class);
})->throws(\Illuminate\View\ViewException::class, 'The name attribute is required for the map element.');

it('Throws an exception for name and id mismatch', function () {
    Livewire::test(MyMap::class, ['name' => 'main-map', 'id' => 'my-map']);
})->throws(\Illuminate\View\ViewException::class, 'The id attribute must have the same value as the name attribute.');
