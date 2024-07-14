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
 * Class Select
 */
class Select extends Component
{
    use GlobalAttributesTrait;

    /**
     * This Boolean attribute indicates that the user cannot interact with the control. If this attribute
     * is not specified, the control inherits its setting from the containing element, for example
     * <fieldset>; if there is no containing element with the disabled attribute set, then the control
     * is enabled.
     */
    public bool $disabled = false;

    /**
     * The <form> element to associate the <select> with (its form owner). The value of this attribute
     * must be the id of a <form> in the same document. (If this attribute is not set, the <select> is
     * associated with its ancestor <form> element, if any.) This attribute lets you associate <select>
     * elements to <form>s anywhere in the document, not just inside a <form>. It can also override an
     * ancestor <form> element.
     */
    public string $form = '';

    /**
     * This Boolean attribute indicates that multiple options can be selected in the list. If it is
     * not specified, then only one option can be selected at a time. When multiple is specified,
     * most browsers will show a scrolling list box instead of a single line dropdown.
     */
    public bool $multiple = false;

    /**
     * This attribute is used to specify the name of the control.
     */
    public string $name = '';

    /**
     * A Boolean attribute indicating that an option with a non-empty string value must be selected.
     */
    public bool $required = false;

    /**
     * If the control is presented as a scrolling list box (e.g. when multiple is specified), this attribute
     * represents the number of rows in the list that should be visible at one time. Browsers are not required
     * to present a select element as a scrolled list box. The default value is 0.
     */
    public int $size = 0;

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
        if ($this->multiple) {
            $this->specificAttributes->add(['multiple']);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
        if ($this->required) {
            $this->specificAttributes->add(['required']);
        }
        if ($this->size > 0) {
            $this->specificAttributes->add(['size' => $this->size]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.select',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
