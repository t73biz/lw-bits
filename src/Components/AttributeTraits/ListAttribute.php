<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait ListAttribute
{
    /**
     * The value given to the list attribute should be the id of a <datalist> element located in the same document. The
     * <datalist> provides a list of predefined values to suggest to the user for this input. Any values in the list
     * that are not compatible with the type are not included in the suggested options. The values provided are
     * suggestions, not requirements: users can select from this predefined list or provide a different value.
     *
     * It is valid on text, search, url, tel, email, date, month, week, time, datetime-local, number, range, and color.
     *
     * Per the specifications, the list attribute is not supported by the hidden, password, checkbox, radio, file, or
     * any of the button types.
     *
     * Depending on the browser, the user may see a custom color palette suggested, tic marks along a range, or even an
     * input that opens like a <select> but allows for non-listed values. Check out the browser compatibility table for
     * the other input types.
     *
     * See the <datalist> element.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
     */
    public string $list = '';

    /**
     * Set the list attribute.
     */
    public function setListAttribute(AttributeCollection &$specificAttributes): void
    {
        if (! empty($this->list)) {
            $specificAttributes->add(['list' => $this->list]);
        }
    }
}
