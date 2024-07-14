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
 * Class Embed
 */
class Embed extends Component
{
    use GlobalAttributesTrait;

    /**
     * The displayed height of the resource, in CSS pixels. This must be an absolute value; percentages are not allowed.
     */
    public int $height = 0;

    /**
     * The URL of the resource being embedded.
     */
    public string $src = '';

    /**
     * The MIME type to use to select the plug-in to instantiate.
     *
     * @see https://developer.mozilla.org/en-US/docs/Glossary/MIME_type
     */
    public string $type = '';

    /**
     * The displayed width of the resource, in CSS pixels. This must be an absolute value; percentages are not allowed.
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
        if (! empty($this->src)) {
            $this->specificAttributes->add(['src' => $this->src]);
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
            'lw-bits::embedded_content.embed',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
