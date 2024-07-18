<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Sections\MyBody;

it('can render', function () {
    Livewire::test(MyBody::class)
        ->assertStatus(200);
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
