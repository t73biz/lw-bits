<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyForm;

it('can render', function () {
    Livewire::test(MyForm::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyForm::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyForm::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyForm::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyForm::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyForm::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyForm::class, ['data' => ['name' => 'main-form']])
        ->assertSee('data-name="main-form"', false);
});

it('can render with dir', function () {
    Livewire::test(MyForm::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyForm::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyForm::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyForm::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyForm::class, ['id' => 'main-form'])
        ->assertSee('id="main-form"', false);
});

it('can render with language', function () {
    Livewire::test(MyForm::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyForm::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyForm::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyForm::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyForm::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyForm::class, ['slotAttribute' => 'main-form'])
        ->assertSee('slot="main-form"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyForm::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyForm::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyForm::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyForm::class, ['title' => 'main-form'])
        ->assertSee('title="main-form"', false);
});

it('can render with translate', function () {
    Livewire::test(MyForm::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with action', function () {
    Livewire::test(MyForm::class, ['action' => 'https://example.com'])
        ->assertSee('action="https://example.com"', false);
});

it('can render with enctype', function () {
    Livewire::test(MyForm::class, ['enctype' => 'multipart/form-data', 'method' => 'post'])
        ->assertSee('enctype="multipart/form-data"', false);
});

it('can render with method', function () {
    Livewire::test(MyForm::class, ['method' => 'post'])
        ->assertSee('method="post"', false);
});

it('can render with name', function () {
    Livewire::test(MyForm::class, ['name' => 'main-form'])
        ->assertSee('name="main-form"', false);
});

it('can render with novalidate', function () {
    Livewire::test(MyForm::class, ['noValidate' => true])
        ->assertSee('novalidate');
});

it('can render with rel', function () {
    Livewire::test(MyForm::class, ['rel' => 'main-form'])
        ->assertSee('rel="main-form"', false);
});

it('can render with target', function () {
    Livewire::test(MyForm::class, ['target' => '_blank'])
        ->assertSee('target="_blank"', false);
});
