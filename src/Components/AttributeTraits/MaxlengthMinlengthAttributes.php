<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait MaxlengthMinlengthAttributes
{
    /**
     * Valid for text, search, url, tel, email, and password, it defines the maximum string length (measured in UTF-16
     * code units) that the user can enter into the field. This must be an integer value of 0 or higher. If no maxlength
     * is specified, or an invalid value is specified, the field has no maximum length. This value must also be greater
     * than or equal to the value of minlength.
     *
     * The input will fail constraint validation if the length of the text entered into the field is greater than
     * maxlength UTF-16 code units long. By default, browsers prevent users from entering more characters than allowed
     * by the maxlength attribute. Constraint validation is only applied when the value is changed by the user.
     * See Client-side validation for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#client-side_validation
     */
    public int $maxlength = 0;

    /**
     * Valid for text, search, url, tel, email, and password, it defines the minimum string length (measured in UTF-16
     * code units) that the user can enter into the entry field. This must be a non-negative integer value smaller than
     * or equal to the value specified by maxlength. If no minlength is specified, or an invalid value is specified, the
     * input has no minimum length.
     *
     * The input will fail constraint validation if the length of the text entered into the field is fewer than
     * minlength UTF-16 code units long, preventing form submission. Constraint validation is only applied when the
     * value is changed by the user.
     * See Client-side validation for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#client-side_validation
     */
    public int $minlength = 0;

    /**
     * Set the maxlength and minlength attributes.
     */
    public function setMaxlengthMinlengthAttributes(AttributeCollection &$specificAttributes): void
    {
        if ($this->maxlength >= 0) {
            $specificAttributes->add(['maxlength' => $this->maxlength]);
        }
        if ($this->minlength >= 0) {
            $specificAttributes->add(['minlength' => $this->minlength]);
        }
    }
}
