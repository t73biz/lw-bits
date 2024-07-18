<?php

namespace T73biz\LwBits\Components\TextContents;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Li
 */
class Li extends Component
{
    use GlobalAttributes;

    /**
     * This integer attribute indicates the current ordinal value of the list item as defined by the <ol> element.
     * The only allowed value for this attribute is a number, even if the list is displayed with Roman numerals or
     * letters. List items that follow this one continue numbering from the value set. The value attribute has no
     * meaning for unordered lists (<ul>) or for menus (<menu>).
     */
    public int $value = 0;

    /**
     * Array of specific attributes for the body element.
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
        if ($this->value !== 0) {
            $this->specificAttributes->add(['value' => $this->value]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::text_contents.li',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
