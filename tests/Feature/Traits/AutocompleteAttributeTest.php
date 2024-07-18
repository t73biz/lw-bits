<?php

use Livewire\Livewire;
use T73biz\LwBits\Tests\TestSupport\Components\Forms\Inputs\MyText;

it('can render with autocomplete on', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'on'])
        ->assertSee('autocomplete="on"', false);
});

it('can render with autocomplete off', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'off'])
        ->assertSee('autocomplete="off"', false);
});

it('can render with autocomplete section-foo', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'section-foo'])
        ->assertSee('autocomplete="section-foo"', false);
});

it('can render with autocomplete name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'name'])
        ->assertSee('autocomplete="name"', false);
});

it('can render with autocomplete honorific-prefix', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'honorific-prefix'])
        ->assertSee('autocomplete="honorific-prefix"', false);
});

it('can render with autocomplete given-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'given-name'])
        ->assertSee('autocomplete="given-name"', false);
});

it('can render with autocomplete additional-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'additional-name'])
        ->assertSee('autocomplete="additional-name"', false);
});

it('can render with autocomplete family-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'family-name'])
        ->assertSee('autocomplete="family-name"', false);
});

it('can render with autocomplete honorific-suffix', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'honorific-suffix'])
        ->assertSee('autocomplete="honorific-suffix"', false);
});

it('can render with autocomplete nickname', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'nickname'])
        ->assertSee('autocomplete="nickname"', false);
});

it('can render with autocomplete email', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'email'])
        ->assertSee('autocomplete="email"', false);
});

it('can render with autocomplete username', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'username'])
        ->assertSee('autocomplete="username"', false);
});

it('can render with autocomplete new-password', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'new-password'])
        ->assertSee('autocomplete="new-password"', false);
});

it('can render with autocomplete current-password', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'current-password'])
        ->assertSee('autocomplete="current-password"', false);
});

it('can render with autocomplete one-time-code', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'one-time-code'])
        ->assertSee('autocomplete="one-time-code"', false);
});

it('can render with autocomplete organization-title', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'organization-title'])
        ->assertSee('autocomplete="organization-title"', false);
});

it('can render with autocomplete organization', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'organization'])
        ->assertSee('autocomplete="organization"', false);
});

it('can render with autocomplete street-address', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'street-address'])
        ->assertSee('autocomplete="street-address"', false);
});

it('can render with autocomplete shipping', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'shipping'])
        ->assertSee('autocomplete="shipping"', false);
});

it('can render with autocomplete billing', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'billing'])
        ->assertSee('autocomplete="billing"', false);
});

it('can render with autocomplete address-line1', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-line1'])
        ->assertSee('autocomplete="address-line1"', false);
});

it('can render with autocomplete address-line2', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-line2'])
        ->assertSee('autocomplete="address-line2"', false);
});

it('can render with autocomplete address-line3', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-line3'])
        ->assertSee('autocomplete="address-line3"', false);
});

it('can render with autocomplete address-level4', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-level4'])
        ->assertSee('autocomplete="address-level4"', false);
});

it('can render with autocomplete address-level3', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-level3'])
        ->assertSee('autocomplete="address-level3"', false);
});

it('can render with autocomplete address-level2', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-level2'])
        ->assertSee('autocomplete="address-level2"', false);
});

it('can render with autocomplete address-level1', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'address-level1'])
        ->assertSee('autocomplete="address-level1"', false);
});

it('can render with autocomplete country', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'country'])
        ->assertSee('autocomplete="country"', false);
});

it('can render with autocomplete country-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'country-name'])
        ->assertSee('autocomplete="country-name"', false);
});

it('can render with autocomplete postal-code', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'postal-code'])
        ->assertSee('autocomplete="postal-code"', false);
});

it('can render with autocomplete cc-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-name'])
        ->assertSee('autocomplete="cc-name"', false);
});

it('can render with autocomplete cc-given-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-given-name'])
        ->assertSee('autocomplete="cc-given-name"', false);
});

it('can render with autocomplete cc-additional-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-additional-name'])
        ->assertSee('autocomplete="cc-additional-name"', false);
});

it('can render with autocomplete cc-family-name', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-family-name'])
        ->assertSee('autocomplete="cc-family-name"', false);
});

it('can render with autocomplete cc-number', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-number'])
        ->assertSee('autocomplete="cc-number"', false);
});

it('can render with autocomplete cc-exp', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-exp'])
        ->assertSee('autocomplete="cc-exp"', false);
});

it('can render with autocomplete cc-exp-month', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-exp-month'])
        ->assertSee('autocomplete="cc-exp-month"', false);
});

it('can render with autocomplete cc-exp-year', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-exp-year'])
        ->assertSee('autocomplete="cc-exp-year"', false);
});

it('can render with autocomplete cc-csc', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-csc'])
        ->assertSee('autocomplete="cc-csc"', false);
});

it('can render with autocomplete cc-type', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'cc-type'])
        ->assertSee('autocomplete="cc-type"', false);
});

it('can render with autocomplete transaction-currency', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'transaction-currency'])
        ->assertSee('autocomplete="transaction-currency"', false);
});

it('can render with autocomplete transaction-amount', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'transaction-amount'])
        ->assertSee('autocomplete="transaction-amount"', false);
});

it('can render with autocomplete language', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'language'])
        ->assertSee('autocomplete="language"', false);
});

it('can render with autocomplete bday', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'bday'])
        ->assertSee('autocomplete="bday"', false);
});

it('can render with autocomplete bday-day', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'bday-day'])
        ->assertSee('autocomplete="bday-day"', false);
});

it('can render with autocomplete bday-month', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'bday-month'])
        ->assertSee('autocomplete="bday-month"', false);
});

it('can render with autocomplete bday-year', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'bday-year'])
        ->assertSee('autocomplete="bday-year"', false);
});

it('can render with autocomplete sex', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'sex'])
        ->assertSee('autocomplete="sex"', false);
});

it('can render with autocomplete tel', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'tel'])
        ->assertSee('autocomplete="tel"', false);
});

it('can render with autocomplete tel-country-code', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'tel-country-code'])
        ->assertSee('autocomplete="tel-country-code"', false);
});

it('can render with autocomplete tel-national', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'tel-national'])
        ->assertSee('autocomplete="tel-national"', false);
});

it('can render with autocomplete tel-area-code', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'tel-area-code'])
        ->assertSee('autocomplete="tel-area-code"', false);
});

it('can render with autocomplete tel-local', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'tel-local'])
        ->assertSee('autocomplete="tel-local"', false);
});

it('can render with autocomplete tel-extension', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'tel-extension'])
        ->assertSee('autocomplete="tel-extension"', false);
});

it('can render with autocomplete impp', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'impp'])
        ->assertSee('autocomplete="impp"', false);
});

it('can render with autocomplete url', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'url'])
        ->assertSee('autocomplete="url"', false);
});

it('can render with autocomplete photo', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'photo'])
        ->assertSee('autocomplete="photo"', false);
});

it('can render with autocomplete webauthn', function () {
    Livewire::test(MyText::class, ['autocomplete' => 'webauthn'])
        ->assertSee('autocomplete="webauthn"', false);
});
