<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait MaxMinAttributes
{
    /**
     * Valid for date, month, week, time, datetime-local, number, and range, it defines the greatest value in the range
     * of permitted values. If the value entered into the element exceeds this, the element fails constraint validation.
     * If the value of the max attribute isn't a number, then the element has no maximum value.
     *
     * There is a special case: if the data type is periodic (such as for dates or times), the value of max may be lower
     * than the value of min, which indicates that the range may wrap around; for example, this allows you to specify a
     * time range from 10 PM to 4 AM.
     */
    public string $max = '';

    /**
     * Valid for date, month, week, time, datetime-local, number, and range, it defines the most negative value in the
     * range of permitted values. If the value entered into the element is less than this, the element fails constraint
     * validation. If the value of the min attribute isn't a number, then the element has no minimum value.
     *
     * This value must be less than or equal to the value of the max attribute. If the min attribute is present but is
     * not specified or is invalid, no min value is applied. If the min attribute is valid and a non-empty value is less
     * than the minimum allowed by the min attribute, constraint validation will prevent form submission.
     * See Client-side validation for more information.
     *
     * There is a special case: if the data type is periodic (such as for dates or times), the value of max may be lower
     * than the value of min, which indicates that the range may wrap around; for example, this allows you to specify a
     * time range from 10 PM to 4 AM.
     */
    public string $min = '';

    /**
     * Set the max and min attributes.
     */
    public function setMaxMinAttributes(AttributeCollection &$specificAttributes): void
    {
        if (! empty($this->max)) {
            $specificAttributes->add(['max' => $this->max]);
        }
        if (! empty($this->min)) {
            $specificAttributes->add(['min' => $this->min]);
        }
    }
}
