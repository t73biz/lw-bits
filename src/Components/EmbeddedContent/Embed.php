<?php

namespace T73biz\LwBits\Components\EmbeddedContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\DimensionalAttributes;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;
use T73biz\LwBits\Components\AttributeTraits\SrcAttribute;

/**
 * Class Embed
 */
class Embed extends Component
{
    use DimensionalAttributes;
    use GlobalAttributes;
    use SrcAttribute;

    /**
     * The MIME type to use to select the plug-in to instantiate.
     *
     * @see https://developer.mozilla.org/en-US/docs/Glossary/MIME_type
     */
    public string $type = '';

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
        $this->setDimensionalAttributes($this->specificAttributes);
        $this->setSrcAttribute($this->specificAttributes);
        if (! empty($this->type)) {
            $this->specificAttributes->add(['type' => $this->type]);
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
