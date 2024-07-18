<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

trait AutocompleteAttribute
{
    /**
     * The HTML autocomplete attribute lets web developers specify what if any permission the user agent has to provide
     * automated assistance in filling out form field values, as well as guidance to the browser as to the type of
     * information expected in the field.
     *
     * It is available on <input> elements that take a text or numeric value as input, <textarea> elements, <select>
     * elements, and <form> elements.
     */
    public string $autocomplete = '';

    /**
     * Set the autocomplete attribute.
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function setAutocompleteAttribute(AttributeCollection &$specificAttributes): void
    {
        /**
         * Possible Values:
         * - off: The browser is not allowed to automatically complete the input. Note: It can't prevent a password manager from asking the user if they want to save username and password information.
         * - on: The browser is allowed to automatically complete the input with no guidance as to the type of data expected.
         * - <token-list>: An ordered set of space-separated tokens consisting of autofill detail tokens.
         *
         * If the autocomplete attribute is <token-list>, each token is the string "section-", case-insensitive,
         * followed by the rest of the token. All form controls with the same token belong to the named group.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete#values
         */
        $allowedValues = [
            'name',
            'honorific-prefix',
            'given-name',
            'additional-name',
            'family-name',
            'honorific-suffix',
            'nickname',
            'email',
            'username',
            'new-password',
            'current-password',
            'one-time-code',
            'organization-title',
            'organization',
            'street-address',
            'shipping',
            'billing',
            'address-line1',
            'address-line2',
            'address-line3',
            'address-level4',
            'address-level3',
            'address-level2',
            'address-level1',
            'country',
            'country-name',
            'postal-code',
            'cc-name',
            'cc-given-name',
            'cc-additional-name',
            'cc-family-name',
            'cc-number',
            'cc-exp',
            'cc-exp-month',
            'cc-exp-year',
            'cc-csc',
            'cc-type',
            'transaction-currency',
            'transaction-amount',
            'language',
            'bday',
            'bday-day',
            'bday-month',
            'bday-year',
            'sex',
            'tel',
            'tel-country-code',
            'tel-national',
            'tel-area-code',
            'tel-local',
            'tel-extension',
            'impp',
            'url',
            'photo',
            'webauthn',
        ];
        if (! empty($this->autocomplete)) {
            if (in_array($this->autocomplete, ['on', 'off'])) {
                $specificAttributes->add(['autocomplete' => $this->autocomplete]);

                return;
            } else {
                $valueParts = explode(' ', $this->autocomplete);

                foreach ($valueParts as $key => $valuePart) {
                    if (str_starts_with($valuePart, 'section-') && $key !== 0) {
                        throw new InvalidAttributeException('The autocomplete attribute value is invalid. The section token must be the first token.');
                    } elseif (! in_array($valuePart, $allowedValues) && ! str_starts_with($valuePart, 'section-')) {
                        throw new InvalidAttributeException('The autocomplete attribute value is invalid.');
                    }
                }
            }

            $specificAttributes->add(['autocomplete' => $this->autocomplete]);
        }
    }
}
