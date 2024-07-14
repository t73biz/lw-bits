<?php

namespace T73biz\LwBits\Components\EmbeddedContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Source
 */
class Source extends Component
{
    use GlobalAttributesTrait;

    /**
     * Specifies the intrinsic height of the image in pixels. Allowed if the parent of <source> is a <picture>.
     * Not allowed if the parent is <audio> or <video>. The height value must be an integer without any units.
     */
    public int $height = 0;

    /**
     * Specifies the media query for the resource's intended media.
     */
    public string $media = '';

    /**
     * Specifies a list of source sizes that describe the final rendered width of the image. Allowed if the parent
     * of <source> is <picture>. Not allowed if the parent is <audio> or <video>. The list consists of source sizes
     * separated by commas. Each source size is media condition-length pair. Before laying the page out, the browser
     * uses this information to determine which image defined in srcset to display. Note that sizes will take effect
     * only if width descriptors are provided with srcset, not pixel density descriptors (i.e., 200w should be used
     * instead of 2x).
     */
    public string $sizes = '';

    /**
     * Specifies the URL of the media resource. Required if the parent of <source> is <audio> or <video>. Not allowed
     * if the parent is <picture>.
     */
    public string $src = '';

    /**
     * Specifies a comma-separated list of one or more image URLs and their descriptors. Required if the parent of
     * <source> is <picture>. Not allowed if the parent is <audio> or <video>. The list consists of strings separated
     * by commas, indicating a set of possible images for the browser to use. Each string is composed of: A URL
     * specifying an image location. An optional width descriptor—a positive integer directly followed by "w",
     * such as 300w. An optional pixel density descriptor—a positive floating number directly followed by "x",
     * such as 2x. Each string in the list must have either a width descriptor or a pixel density descriptor to
     * be valid. These two descriptors should not be used together; only one should be used consistently throughout
     * the list. The value of each descriptor in the list must be unique. The browser chooses the most adequate
     * image to display at a given point of time based on these descriptors. If the descriptors are not specified,
     * the default value used is 1x. If the sizes attribute is also present, then each string must include a width
     * descriptor. If the browser does not support srcset, then src will be used for the default image source.
     */
    public string $srcset = '';

    /**
     * Specifies the MIME media type of the image or other media type, optionally including a codecs parameter.
     */
    public string $type = '';

    /**
     * Specifies the intrinsic width of the image in pixels. Allowed if the parent of <source> is a <picture>. Not
     * allowed if the parent is <audio> or <video>. The width value must be an integer without any units.
     */
    public int $width = 0;

    /**
     * The specific attributes for the embed component
     */
    private AttributeCollection $specificAttributes;

    /**
     * Standard mount function
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function mount(): void
    {
        $this->setGlobalAttributes();
        $this->specificAttributes = new AttributeCollection();
        if ($this->height > 0) {
            $this->specificAttributes->add(['height' => $this->height]);
        }
        if (! empty($this->media)) {
            $this->specificAttributes->add(['media' => $this->media]);
        }
        if (! empty($this->sizes)) {
            $this->specificAttributes->add(['sizes' => $this->sizes]);
        }
        if (! empty($this->src)) {
            $this->specificAttributes->add(['src' => $this->src]);
        }
        if (! empty($this->srcset)) {
            $this->specificAttributes->add(['srcset' => $this->srcset]);
        }
        if (! empty($this->type)) {
            $this->specificAttributes->add(['type' => $this->type]);
        }
        if ($this->width > 0) {
            $this->specificAttributes->add(['width' => $this->width]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::embedded_content.source',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
