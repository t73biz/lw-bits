<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait CheckedAttribute
{
    /**
     * Valid for both radio and checkbox types, checked is a Boolean attribute. If present on a radio type, it indicates
     * that the radio button is the currently selected one in the group of same-named radio buttons. If present on a
     * checkbox type, it indicates that the checkbox is checked by default (when the page loads). It does not indicate
     * whether this checkbox is currently checked: if the checkbox's state is changed, this content attribute does not
     * reflect the change. (Only the HTMLInputElement's checked IDL attribute is updated.)
     *
     * Note:
     * Unlike other input controls, a checkboxes and radio buttons value are only included in the submitted data
     * if they are currently checked. If they are, the name and the value(s) of the checked controls are submitted.
     *
     * For example, if a checkbox whose name is fruit has a value of cherry, and the checkbox is checked, the form data
     * submitted will include fruit=cherry. If the checkbox isn't active, it isn't listed in the form data at all. The
     * default value for checkboxes and radio buttons is on.
     */
    public bool $checked = false;

    /**
     * Set the checked attribute.
     */
    public function setCheckedAttribute(AttributeCollection $specificAttributes): void
    {
        if ($this->checked) {
            $specificAttributes->add(['checked']);
        }
    }
}
