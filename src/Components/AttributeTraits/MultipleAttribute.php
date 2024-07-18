<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait MultipleAttribute
{
    /**
     * The Boolean multiple attribute, if set, means the user can enter comma separated email addresses in the email
     * widget or can choose more than one file with the file input.
     * See the email and file input type.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/email
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file
     */
    public bool $multiple = false;

    /**
     * Set the multiple attribute.
     */
    public function setMultipleAttribute(AttributeCollection &$specificAttributes): void
    {
        if ($this->multiple) {
            $specificAttributes->add(['multiple']);
        }
    }
}
