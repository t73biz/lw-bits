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
 * Class Fieldset
 */
class Fieldset extends Component
{
    use GlobalAttributesTrait;

    /**
     * If this Boolean attribute is set, all form controls that are descendants of the <fieldset>,
     * are disabled, meaning they are not editable and won't be submitted along with the <form>.
     * They won't receive any browsing events, like mouse clicks or focus-related events. By default
     * browsers display such controls grayed out. Note that form elements inside the <legend> element
     * won't be disabled.
     */
    public bool $disabled = false;

    /**
     * This attribute takes the value of the id attribute of a <form> element you want the <fieldset>
     * to be part of, even if it is not inside the form. Please note that usage of this is confusing
     * — if you want the <input> elements inside the <fieldset> to be associated with the form, you
     * need to use the form attribute directly on those elements. You can check which elements are
     * associated with a form via JavaScript, using HTMLFormElement.elements.
     */
    public string $form = '';

    /**
     * The name associated with the group.
     */
    public string $name = '';

    /**
     * Standard mount function
     */
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
        if (! empty($this->form)) {
            $this->specificAttributes->add(['form' => $this->form]);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.fieldset',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
