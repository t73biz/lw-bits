<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyTextarea;

it('can render', function () {
    Livewire::test(MyTextarea::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyTextarea::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyTextarea::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyTextarea::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyTextarea::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyTextarea::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyTextarea::class, ['data' => ['name' => 'main-textarea']])
        ->assertSee('data-name="main-textarea"', false);
});

it('can render with dir', function () {
    Livewire::test(MyTextarea::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyTextarea::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyTextarea::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyTextarea::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyTextarea::class, ['id' => 'main-textarea'])
        ->assertSee('id="main-textarea"', false);
});

it('can render with language', function () {
    Livewire::test(MyTextarea::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyTextarea::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyTextarea::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyTextarea::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyTextarea::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyTextarea::class, ['slotAttribute' => 'main-textarea'])
        ->assertSee('slot="main-textarea"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyTextarea::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyTextarea::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyTextarea::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyTextarea::class, ['title' => 'main-textarea'])
        ->assertSee('title="main-textarea"', false);
});

it('can render with translate', function () {
    Livewire::test(MyTextarea::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with autocomplete off', function () {
    Livewire::test(MyTextarea::class, ['autocomplete' => 'off'])
        ->assertSee('autocomplete="off"', false);
});

it('can render with autocomplete on', function () {
    Livewire::test(MyTextarea::class, ['autocomplete' => 'on'])
        ->assertSee('autocomplete="on"', false);
});

it('throws an exception if autocomplete is misvalued', function () {
    Livewire::test(MyTextarea::class, ['autocomplete' => 'yes']);
})->throws(\Illuminate\View\ViewException::class, 'The autocomplete attribute must be either "off" or "on".');

it('can render with cols', function () {
    Livewire::test(MyTextarea::class, ['cols' => 10])
        ->assertSee('cols="10"', false);
});

it('can render with dirname', function () {
    Livewire::test(MyTextarea::class, ['dirname' => 'main-textarea'])
        ->assertSee('dirname="main-textarea"', false);
});

it('can render with disabled', function () {
    Livewire::test(MyTextarea::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with form', function () {
    Livewire::test(MyTextarea::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with maxlength', function () {
    Livewire::test(MyTextarea::class, ['maxlength' => 100])
        ->assertSee('maxlength="100"', false);
});

it('can render with minlength', function () {
    Livewire::test(MyTextarea::class, ['minlength' => 10])
        ->assertSee('minlength="10"', false);
});

it('can render with name', function () {
    Livewire::test(MyTextarea::class, ['name' => 'main-textarea'])
        ->assertSee('name="main-textarea"', false);
});

it('can render with placeholder', function () {
    Livewire::test(MyTextarea::class, ['placeholder' => 'Enter text here'])
        ->assertSee('placeholder="Enter text here"', false);
});

it('can render with readonly', function () {
    Livewire::test(MyTextarea::class, ['readonly' => true])
        ->assertSee('readonly');
});

it('can render with required', function () {
    Livewire::test(MyTextarea::class, ['required' => true])
        ->assertSee('required');
});

it('can render with rows', function () {
    Livewire::test(MyTextarea::class, ['rows' => 10])
        ->assertSee('rows="10"', false);
});
