<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait PatternAttribute
{
    /**
     * Valid for text, search, url, tel, email, and password, the pattern attribute defines a regular expression that
     * the input's value must match in order for the value to pass constraint validation. It must be a valid JavaScript
     * regular expression, as used by the RegExp type, and as documented in our guide on regular expressions; the 'u'
     * flag is specified when compiling the regular expression, so that the pattern is treated as a sequence of Unicode
     * code points, instead of as ASCII. No forward slashes should be specified around the pattern text.
     *
     * If the pattern attribute is present but is not specified or is invalid, no regular expression is applied and this
     * attribute is ignored completely. If the pattern attribute is valid and a non-empty value does not match the
     * pattern, constraint validation will prevent form submission.
     *
     * Note: If using the pattern attribute, inform the user about the expected format by including explanatory text
     * nearby. You can also include a title attribute to explain what the requirements are to match the pattern; most
     * browsers will display this title as a tooltip. The visible explanation is required for accessibility. The tooltip
     * is an enhancement.
     *
     * See Client-side validation for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#client-side_validation
     */
    public string $pattern = '';

    /**
     * Set the pattern attribute.
     */
    public function setPatternAttribute(AttributeCollection &$specificAttributes): void
    {
        if (! empty($this->pattern)) {
            $specificAttributes->add(['pattern' => $this->pattern]);
        }
    }
}
