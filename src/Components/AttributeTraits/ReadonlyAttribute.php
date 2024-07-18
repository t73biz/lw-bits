<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait ReadonlyAttribute
{
    /**
     * A Boolean attribute which, if present, indicates that the user should not be able to edit the value of the input.
     * The readonly attribute is supported by the text, search, url, tel, email, date, month, week, time, datetime-local,
     * number, and password input types.
     *
     * See the HTML attribute: readonly for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/readonly
     */
    public bool $readonly = false;

    /**
     * Set the readonly attribute
     */
    public function setReadonlyAttribute(AttributeCollection &$specificAttributes): void
    {
        if ($this->readonly) {
            $specificAttributes->add(['readonly']);
        }
    }
}
