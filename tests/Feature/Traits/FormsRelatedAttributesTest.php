<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyButton;

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
