<?php

namespace T73biz\LwBits\Components\Forms;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Option
 */
class Option extends Component
{
    use GlobalAttributes;

    /**
     * If this Boolean attribute is set, this option is not checkable. Often browsers grey out such control
     * and it won't receive any browsing event, like mouse clicks or focus-related ones. If this attribute is
     * not set, the element can still be disabled if one of its ancestors is a disabled <optgroup> element.
     */
    public bool $disabled = false;

    /**
     * This attribute is text for the label indicating the meaning of the option. If the label attribute isn't defined,
     * its value is that of the element text content.
     */
    public string $label = '';

    /**
     * If present, this Boolean attribute indicates that the option is initially selected. If the <option> element is the
     * descendant of a <select> element whose multiple attribute is not set, only one single <option> of this <select>
     * element may have the selected attribute.
     */
    public bool $selected = false;

    /**
     * The content of this attribute represents the value to be submitted with the form, should this option be selected.
     * If this attribute is omitted, the value is taken from the text content of the option element.
     */
    public string $value = '';

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
        if ($this->disabled) {
            $this->specificAttributes->add(['disabled']);
        }
        if (! empty($this->label)) {
            $this->specificAttributes->add(['label' => $this->label]);
        }
        if ($this->selected) {
            $this->specificAttributes->add(['selected']);
        }
        if (! empty($this->value)) {
            $this->specificAttributes->add(['value' => $this->value]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.option',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
