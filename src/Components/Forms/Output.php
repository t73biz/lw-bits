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
 * Class Output
 */
class Output extends Component
{
    use GlobalAttributesTrait;

    /**
     * A space-separated list of other elements' ids, indicating that those elements contributed
     * input values to (or otherwise affected) the calculation.
     */
    public string $for = '';

    /**
     * The <form> element to associate the output with (its form owner). The value of this attribute must
     * be the id of a <form> in the same document. (If this attribute is not set, the <output> is
     * associated with its ancestor <form> element, if any.) This attribute lets you associate
     * <output> elements to <form>s anywhere in the document, not just inside a <form>.
     * It can also override an ancestor <form> element.
     */
    public string $form = '';

    /**
     * The element's name. Used in the form.elements API. The <output> value, name, and contents are
     * NOT submitted during form submission.
     */
    public string $name = '';

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
        if (! empty($this->for)) {
            $this->specificAttributes->add(['for' => $this->for]);
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
            'lw-bits::forms.output',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
