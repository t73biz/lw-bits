<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait PlaceholderAttribute
{
    /**
     * Valid for text, search, url, tel, email, password, and number, the placeholder attribute provides a brief hint to
     * the user as to what kind of information is expected in the field. It should be a word or short phrase that
     * provides a hint as to the expected type of data, rather than an explanation or prompt. The text must not include
     * carriage returns or line feeds. So for example if a field is expected to capture a user's first name, and its
     * label is "First Name", a suitable placeholder might be "e.g. Mustafa".
     *
     * Note:
     * The placeholder attribute is not as semantically useful as other ways to explain your form, and can cause
     * unexpected technical issues with your content.
     * See Labels for more information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#labels
     */
    public string $placeholder = '';

    /**
     * Set the placeholder attribute.
     */
    public function setPlaceholderAttribute(AttributeCollection &$specificAttributes): void
    {
        if (! empty($this->placeholder)) {
            $specificAttributes->add(['placeholder' => $this->placeholder]);
        }
    }
}
