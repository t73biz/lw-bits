<?php

namespace T73biz\LwBits\Components\InlineTextSemantics;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Quote
 */
class Quote extends Component
{
    use GlobalAttributesTrait;

    /**
     * A URL that designates a source document or message for the information quoted. This attribute is intended to
     * point to information explaining the context or the reference for the quote
     */
    public string $cite = '';

    /**
     * Array of specific attributes for the body element.
     */
    private AttributeCollection $specificAttributes;

    /**
     * Standard mount function
     */
    public function mount(): void
    {
        $this->setGlobalAttributes();
        $this->specificAttributes = new AttributeCollection();
        if ($this->cite) {
            $this->specificAttributes->add(['cite' => $this->cite]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::inline_text_semantics.quote',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
