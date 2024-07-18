<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait RequiredAttribute
{
    /**
     * required is a Boolean attribute which, if present, indicates that the user must specify a value for the input
     * before the owning form can be submitted. The required attribute is supported by text, search, url, tel, email,
     * date, month, week, time, datetime-local, number, password, checkbox, radio, and file inputs.
     *
     * See Client-side validation and the HTML attribute: required for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#client-side_validation
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes#required
     */
    public bool $required = false;

    /**
     * Set the required attribute.
     */
    public function setRequiredAttribute(AttributeCollection &$specificAttributes): void
    {
        if ($this->required) {
            $specificAttributes->add(['required']);
        }
    }
}
