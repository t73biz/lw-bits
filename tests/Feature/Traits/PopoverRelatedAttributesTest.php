<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyButton;

it('can render with popovertarget', function () {
    Livewire::test(MyButton::class, ['popovertarget' => 'foo'])
        ->assertSee('popovertarget="foo"', false);
});

it('can render with popovertargetaction', function () {
    Livewire::test(MyButton::class, ['popovertargetaction' => 'show'])
        ->assertSee('popovertargetaction="show"', false);
});

it('throws exception for invalid popovertargetaction', function () {
    Livewire::test(MyButton::class, ['popovertargetaction' => 'invalid']);
})->throws(\Illuminate\View\ViewException::class, 'The popovertargetaction attribute must be one of hide, show, or toggle.');
