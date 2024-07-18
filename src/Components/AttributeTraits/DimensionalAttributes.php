<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;

trait DimensionalAttributes
{
    /**
     * The displayed height of the resource, in CSS pixels. This must be an absolute value; percentages are not allowed.
     */
    public int $height = 0;

    /**
     * The displayed width of the resource, in CSS pixels. This must be an absolute value; percentages are not allowed.
     */
    public int $width = 0;

    /**
     * Set the dimensional attributes
     */
    public function setDimensionalAttributes(AttributeCollection &$specificAttributes): void
    {
        if ($this->height > 0) {
            $specificAttributes->add(['height' => $this->height]);
        }
        if ($this->width > 0) {
            $specificAttributes->add(['width' => $this->width]);
        }
    }
}
