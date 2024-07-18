<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

trait SrcAttribute
{
    /**
     * The resource URL. Mandatory for the <img> element. On browsers supporting srcset, src is treated like a candidate
     * image with a pixel density descriptor 1x, unless an image with this pixel density descriptor is already defined
     * in srcset, or unless srcset contains w descriptors.
     */
    public string $src = '';

    /**
     * Set the src attribute
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function setSrcAttribute(AttributeCollection &$specificAttributes, bool $required = false): void
    {
        if (empty($this->src) && $required) {
            throw new InvalidAttributeException('The source attribute must be set.');
        }
        if (! empty($this->src)) {
            $specificAttributes->add(['src' => $this->src]);
        }
    }
}
