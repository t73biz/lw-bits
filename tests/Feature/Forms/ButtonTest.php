<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\MyButton;

it('can render', function () {
    Livewire::test(MyButton::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyButton::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyButton::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyButton::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyButton::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyButton::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyButton::class, ['data' => ['name' => 'main-button']])
        ->assertSee('data-name="main-button"', false);
});

it('can render with dir', function () {
    Livewire::test(MyButton::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyButton::class, ['draggable' => 'true'])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyButton::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyButton::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyButton::class, ['id' => 'main-button'])
        ->assertSee('id="main-button"', false);
});

it('can render with language', function () {
    Livewire::test(MyButton::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyButton::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyButton::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyButton::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyButton::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyButton::class, ['slotAttribute' => 'main-button'])
        ->assertSee('slot="main-button"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyButton::class, ['spellcheck' => 'true'])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyButton::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyButton::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyButton::class, ['title' => 'main-button'])
        ->assertSee('title="main-button"', false);
});

it('can render with translate', function () {
    Livewire::test(MyButton::class, ['translate' => 'yes'])
        ->assertSee('translate');
});

it('can render with disabled', function () {
    Livewire::test(MyButton::class, ['disabled' => true])
        ->assertSee('disabled');
});

it('can render with form', function () {
    Livewire::test(MyButton::class, ['form' => 'main-form'])
        ->assertSee('form="main-form"', false);
});

it('can render with formaction', function () {
    Livewire::test(
        MyButton::class,
        [
            'formaction' => 'submit-form',
            'form' => 'main-form',
            'type' => 'submit',
        ]
    )->assertSee('formaction="submit-form"', false);
});

it('can render with formenctype', function () {
    Livewire::test(
        MyButton::class,
        [
            'formenctype' => 'application/x-www-form-urlencoded',
            'form' => 'main-form',
            'type' => 'submit',
        ]
    )->assertSee('formenctype="application/x-www-form-urlencoded"', false);
});

it('can render with formmethod', function () {
    Livewire::test(
        MyButton::class,
        [
            'formmethod' => 'post',
            'form' => 'main-form',
            'type' => 'submit',
        ]
    )->assertSee('formmethod="post"', false);
});

it('can render with formnovalidate', function () {
    Livewire::test(
        MyButton::class,
        [
            'formnovalidate' => true,
            'form' => 'main-form',
            'type' => 'submit',
        ]
    )->assertSee('formnovalidate');
});

it('can render with formtarget', function () {
    Livewire::test(
        MyButton::class,
        [
            'formtarget' => '_blank',
            'form' => 'main-form',
            'type' => 'submit',
        ]
    )->assertSee('formtarget="_blank"', false);
});

it('can render with name', function () {
    Livewire::test(MyButton::class, ['name' => 'main-button'])
        ->assertSee('name="main-button"', false);
});

it('can render with type', function () {
    Livewire::test(MyButton::class, ['type' => 'submit'])
        ->assertSee('type="submit"', false);
});

it('can render with value', function () {
    Livewire::test(MyButton::class, ['name' => 'foo', 'value' => 'main-button'])
        ->assertSee('value="main-button"', false);
});
