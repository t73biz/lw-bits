<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait SizeAttribute
{
    /**
     * Valid for email, password, tel, url, and text, the size attribute specifies how much of the input is shown.
     * Basically creates same result as setting CSS width property with a few specialities. The actual unit of the value
     * depends on the input type. For password and text, it is a number of characters (or em units) with a default value
     * of 20, and for others, it is pixels (or px units). CSS width takes precedence over the size attribute.
     */
    public int $size = 0;

    /**
     * Set the size attribute.
     */
    public function setSizeAttribute(AttributeCollection &$specificAttributes): void
    {
        if ($this->size > 0) {
            $specificAttributes->add(['size' => $this->size]);
        }
    }
}
