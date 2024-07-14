<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyOptgroup;

it('can render', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo'])
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'data' => ['name' => 'main-optgroup']])
        ->assertSee('data-name="main-optgroup"', false);
});

it('can render with dir', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'id' => 'main-optgroup'])
        ->assertSee('id="main-optgroup"', false);
});

it('can render with language', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'slotAttribute' => 'main-optgroup'])
        ->assertSee('slot="main-optgroup"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'title' => 'main-optgroup'])
        ->assertSee('title="main-optgroup"', false);
});

it('can render with translate', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with disabled', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'disabled' => true])
        ->assertSee('disabled');
});

it('can render with label', function () {
    Livewire::test(MyOptgroup::class, ['label' => 'Foo', 'label' => 'main-optgroup'])
        ->assertSee('label="main-optgroup"', false);
});
