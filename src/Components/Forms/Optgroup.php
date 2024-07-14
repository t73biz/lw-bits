<?php

namespace T73biz\LwBits\Components\Forms;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Optgroup
 */
class Optgroup extends Component
{
    use GlobalAttributesTrait;

    /**
     * If this Boolean attribute is set, none of the items in this option group is selectable.
     * Often browsers grey out such control and it won't receive any browsing events,
     * like mouse clicks or focus-related ones.
     */
    public bool $disabled = false;

    /**
     * The name of the group of options, which the browser can use when labeling the options
     * in the user interface. This attribute is mandatory if this element is used.
     */
    public string $label = '';

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
        if (empty($this->label)) {
            throw new \T73biz\LwBits\Exceptions\InvalidAttributeException(
                'The label attribute is mandatory for the optgroup component'
            );
        }
        $this->specificAttributes->add(['label' => $this->label]);
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.optgroup',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
