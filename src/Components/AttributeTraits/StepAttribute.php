<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait StepAttribute
{
    /**
     * Valid for date, month, week, time, datetime-local, number, and range, the step attribute is a number that
     * specifies the granularity that the value must adhere to.
     *
     * If not explicitly included:
     * - step defaults to 1 for number and range.
     * - Each date/time input type has a default step value appropriate for the type; see the individual input pages:
     *   date, datetime-local, month, time, and week.
     *
     * The value must be a positive number—integer or float—or the special value any, which means no stepping is
     * implied, and any value is allowed (barring other constraints, such as min and max).
     *
     * If any is not explicitly set, valid values for the number, date/time input types, and range input types are equal
     * to the basis for stepping — the min value and increments of the step value, up to the max value, if specified.
     *
     * For example, if you have <input type="number" min="10" step="2">, then any even integer, 10 or greater, is valid.
     * If omitted, <input type="number">, any integer is valid, but floats (like 4.2) are not valid, because step
     * defaults to 1. For 4.2 to be valid, step would have had to be set to any, 0.1, 0.2, or any the min value would
     * have had to be a number ending in .2, such as <input type="number" min="-5.2">
     *
     * Note: When the data entered by the user doesn't adhere to the stepping configuration, the value is considered
     * invalid in constraint validation and will match the :invalid pseudoclass.
     *
     * See Client-side validation for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#client-side_validation
     */
    public string $step = '';

    /**
     * Set the step attribute
     */
    public function setStepAttribute(AttributeCollection &$specificAttributes): void
    {
        if (! empty($this->step)) {
            $specificAttributes->add(['step' => $this->step]);
        }
    }
}
