<?php

namespace T73biz\LwBits\Components\Forms;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\FormRelatedAttributes;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;
use T73biz\LwBits\Components\AttributeTraits\PopoverRelatedAttributes;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

/**
 * Class Button
 */
class Button extends Component
{
    use FormRelatedAttributes;
    use GlobalAttributes;
    use PopoverRelatedAttributes;

    /**
     * This Boolean attribute specifies that the button should have input focus when the page loads. Only one
     * element in a document can have this attribute.
     */
    public bool $autofocus = false;

    /**
     * This Boolean attribute prevents the user from interacting with the button: it cannot be pressed or focused.
     */
    public bool $disabled = false;

    /**
     * The <form> element to associate the button with (its form owner). The value of this attribute must be
     * the id of a <form> in the same document. (If this attribute is not set, the <button> is associated
     * with its ancestor <form> element, if any.) This attribute lets you associate <button> elements to <form>s
     * anywhere in the document, not just inside a <form>. It can also override an ancestor <form> element.
     */
    public string $form = '';

    /**
     * The name of the button, submitted as a pair with the button's value as part of the form data, when that button
     * is used to submit the form.
     */
    public string $name = '';

    /**
     * The default behavior of the button. Possible values are:
     * submit: The button submits the form data to the server. This is the default if the attribute is not specified
     * for buttons associated with a <form>, or if the attribute is an empty or invalid value.
     * reset: The button resets all the controls to their initial values, like <input type="reset">
     * (This behavior tends to annoy users.)
     * button: The button has no default behavior, and does nothing when pressed by default. It can have client-side
     * scripts listen to the element's events, which are triggered when the events occur.
     */
    public string $type = 'button';

    /**
     * Defines the value associated with the button's name when it's submitted with the form data. This value is
     * passed to the server in params when the form is submitted using this button.
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
        $this->setFormRelatedAttributes($this->specificAttributes, $this->type);
        $this->setPopoverAttributes($this->specificAttributes);
        if ($this->disabled) {
            $this->specificAttributes->add(['disabled']);
        }
        if (! empty($this->form)) {
            $this->specificAttributes->add(['form' => $this->form]);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
        if (! in_array($this->type, ['submit', 'reset', 'button'])) {
            throw new InvalidAttributeException(
                'The type attribute must be one of submit, reset, or button.'
            );
        }
        $this->specificAttributes->add(['type' => $this->type]);
        if (! empty($this->value)) {
            if (empty($this->name)) {
                throw new InvalidAttributeException(
                    'The value attribute requires name attribute to be set.'
                );
            }
            $this->specificAttributes->add(['value' => $this->value]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.button',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
