<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait AltAttribute
{
    /**
     * A text description of the resource. This is a required attribute for accessibility and is used by screen readers.
     */
    public string $alt = '';

    /**
     * Set the alt attribute
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function setAltAttribute(AttributeCollection &$specificAttributes): void
    {
        if (empty($this->alt)) {
            throw new \T73biz\LwBits\Exceptions\InvalidAttributeException('The alt attribute is required for accessibility and must be set.');
        }
        $specificAttributes->add(['alt' => $this->alt]);
    }
}
