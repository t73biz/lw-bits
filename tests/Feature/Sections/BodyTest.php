<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestCase;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyBody;

uses(TestCase::class)
    ->group('body')
    ->in('body');

it('can render', function () {
    Livewire::test(MyBody::class)
        ->assertStatus(200);
});

it('can render with accesskey', function () {
    Livewire::test(MyBody::class, ['accesskey' => true])
        ->assertSee('accesskey');
});

it('can render with autocapitalize', function () {
    Livewire::test(MyBody::class, ['autocapitalize' => true])
        ->assertSee('autocapitalize');
});

it('can render with autofocus', function () {
    Livewire::test(MyBody::class, ['autofocus' => true])
        ->assertSee('autofocus');
});

it('can render with contenteditable', function () {
    Livewire::test(MyBody::class, ['contenteditable' => true])
        ->assertSee('contenteditable');
});

it('can render with css classes', function () {
    Livewire::test(MyBody::class, ['cssClasses' => ['class1', 'class2']])
        ->assertSee('class="class1 class2"', false);
});

it('can render with data-*', function () {
    Livewire::test(MyBody::class, ['data' => ['name' => 'main-div']])
        ->assertSee('data-name="main-div"', false);
});

it('can render with dir', function () {
    Livewire::test(MyBody::class, ['direction' => 'rtl'])
        ->assertSee('dir="rtl"', false);
});

it('can render with draggable', function () {
    Livewire::test(MyBody::class, ['draggable' => true])
        ->assertSee('draggable');
});

it('can render with enterkeyhint', function () {
    Livewire::test(MyBody::class, ['enterkeyhint' => 'enter'])
        ->assertSee('enterkeyhint="enter"', false);
});

it('can render with hidden', function () {
    Livewire::test(MyBody::class, ['hidden' => true])
        ->assertSee('hidden');
});

it('can render with id', function () {
    Livewire::test(MyBody::class, ['id' => 'main-div'])
        ->assertSee('id="main-div"', false);
});

it('can render with language', function () {
    Livewire::test(MyBody::class, ['language' => 'en'])
        ->assertSee('lang="en"', false);
});

it('can render with nonce', function () {
    Livewire::test(MyBody::class, ['nonce' => 'abc123'])
        ->assertSee('nonce="abc123"', false);
});

it('can render with parts', function () {
    Livewire::test(MyBody::class, ['parts' => ['part1', 'part2']])
        ->assertSee('part="part1 part2"', false);
});

it('can render with popOver', function () {
    Livewire::test(MyBody::class, ['popover' => true])
        ->assertSee('popover');
});

it('can render with role', function () {
    Livewire::test(MyBody::class, ['role' => 'main'])
        ->assertSee('role="main"', false);
});

it('can render with slot', function () {
    Livewire::test(MyBody::class, ['slotAttribute' => 'main-div'])
        ->assertSee('slot="main-div"', false);
});

it('can render with spellcheck', function () {
    Livewire::test(MyBody::class, ['spellcheck' => true])
        ->assertSee('spellcheck');
});

it('can render with styles', function () {
    Livewire::test(MyBody::class, ['styles' => ['color' => 'red', 'font-size' => '16px']])
        ->assertSee('style="color:red;font-size:16px"', false);
});

it('can render with tabindex', function () {
    Livewire::test(MyBody::class, ['tabindex' => 1])
        ->assertSee('tabindex="1"', false);
});

it('can render with title', function () {
    Livewire::test(MyBody::class, ['title' => 'main-div'])
        ->assertSee('title="main-div"', false);
});

it('can render with translate', function () {
    Livewire::test(MyBody::class, ['translate' => true])
        ->assertSee('translate');
});

it('can render with onAfterPrint', function () {
    Livewire::test(MyBody::class, ['onAfterPrint' => 'alert()'])
        ->assertSee('onafterprint="alert()"', false);
});

it('can render with onBeforePrint', function () {
    Livewire::test(MyBody::class, ['onBeforePrint' => 'alert()'])
        ->assertSee('onbeforeprint="alert()"', false);
});

it('can render with onBeforeUnload', function () {
    Livewire::test(MyBody::class, ['onBeforeUnload' => 'alert()'])
        ->assertSee('onbeforeunload="alert()"', false);
});

it('can render with onBlur', function () {
    Livewire::test(MyBody::class, ['onBlur' => 'alert()'])
        ->assertSee('onblur="alert()"', false);
});

it('can render with onError', function () {
    Livewire::test(MyBody::class, ['onError' => 'alert()'])
        ->assertSee('onerror="alert()"', false);
});

it('can render with onFocus', function () {
    Livewire::test(MyBody::class, ['onFocus' => 'alert()'])
        ->assertSee('onfocus="alert()"', false);
});

it('can render with onHashChange', function () {
    Livewire::test(MyBody::class, ['onHashChange' => 'alert()'])
        ->assertSee('onhashchange="alert()"', false);
});

it('can render with onLanguageChange', function () {
    Livewire::test(MyBody::class, ['onLanguageChange' => 'alert()'])
        ->assertSee('onlanguagechange="alert()"', false);
});

it('can render with onLoad', function () {
    Livewire::test(MyBody::class, ['onLoad' => 'alert()'])
        ->assertSee('onload="alert()"', false);
});

it('can render with onMessage', function () {
    Livewire::test(MyBody::class, ['onMessage' => 'alert()'])
        ->assertSee('onmessage="alert()"', false);
});

it('can render with onOffline', function () {
    Livewire::test(MyBody::class, ['onOffline' => 'alert()'])
        ->assertSee('onoffline="alert()"', false);
});

it('can render with onOnline', function () {
    Livewire::test(MyBody::class, ['onOnline' => 'alert()'])
        ->assertSee('ononline="alert()"', false);
});

it('can render with onPopState', function () {
    Livewire::test(MyBody::class, ['onPopState' => 'alert()'])
        ->assertSee('onpopstate="alert()"', false);
});

it('can render with onRedo', function () {
    Livewire::test(MyBody::class, ['onRedo' => 'alert()'])
        ->assertSee('onredo="alert()"', false);
});

it('can render with onResize', function () {
    Livewire::test(MyBody::class, ['onResize' => 'alert()'])
        ->assertSee('onresize="alert()"', false);
});

it('can render with onStorage', function () {
    Livewire::test(MyBody::class, ['onStorage' => 'alert()'])
        ->assertSee('onstorage="alert()"', false);
});

it('can render with onUndo', function () {
    Livewire::test(MyBody::class, ['onUndo' => 'alert()'])
        ->assertSee('onundo="alert()"', false);
});

it('can render with onUnload', function () {
    Livewire::test(MyBody::class, ['onUnload' => 'alert()'])
        ->assertSee('onunload="alert()"', false);
});
