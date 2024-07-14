<?php

namespace T73biz\LwBits\Components\DocumentMetadata;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Base
 */
class Base extends Component
{
    use GlobalAttributesTrait;

    /**
     * The base URL to be used throughout the document for relative URLs. Absolute and relative URLs are allowed.
     * `data:` and `javascript:` URLs are not allowed.
     */
    public string $href = '';

    /**
     * A keyword or author-defined name of the default browsing context to show the results of navigation from <a>,
     * <area>, or <form> elements without explicit target attributes. The following keywords have special meanings:
     *
     * - _self (default): Show the result in the current browsing context.
     * - _blank: Show the result in a new, unnamed browsing context.
     * - _parent: Show the result in the parent browsing context of the current one, if the current page is inside a frame. If there is no parent, acts the same as _self.
     * - _top: Show the result in the topmost browsing context (the browsing context that is an ancestor of the current one and has no parent). If there is no parent, acts the same as _self.
     */
    public string $target = '';

    /**
     * @var \Livewire\Features\SupportAttributes\AttributeCollection
     *                                                               The specific attributes for the base element
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
        if (! empty($this->href)) {
            $this->specificAttributes->add(['href' => $this->href]);
        }
        if (! empty($this->target)) {
            $this->specificAttributes->add(['target' => $this->target]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::document_metadata.base',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
