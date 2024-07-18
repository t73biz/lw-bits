<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

/**
 * Trait GenericInputAttributes
 */
trait GenericInputAttributes
{
    /**
     * A Boolean attribute which, if present, indicates that the user should not be able to interact with the input.
     * Disabled inputs are typically rendered with a dimmer color or using some other form of indication that the field
     * is not available for use.
     *
     * Specifically, disabled inputs do not receive the click event, and disabled inputs are not submitted with the form.
     *
     * Note:
     * Although not required by the specification, Firefox will by default persist the dynamic disabled state of
     * an <input> across page loads. Use the autocomplete attribute to control this feature.
     */
    public bool $disabled = false;

    /**
     * A string specifying the <form> element with which the input is associated (that is, its form owner). This
     * string's value, if present, must match the id of a <form> element in the same document. If this attribute isn't
     * specified, the <input> element is associated with the nearest containing form, if any.
     *
     * The form attribute lets you place an input anywhere in the document but have it included with a form elsewhere
     * in the document.
     *
     * Note:
     * An input can only be associated with one form.
     */
    public string $form = '';

    /**
     * A string specifying a name for the input control. This name is submitted along with the control's value when the
     * form data is submitted.
     *
     * Consider the name a required attribute (even though it's not). If an input has no name specified, or name is
     * empty, the input's value is not submitted with the form! (Disabled controls, unchecked radio buttons, unchecked
     * checkboxes, and reset buttons are also not sent.)
     *
     * There are two special cases:
     *
     * _charset_ : If used as the name of an <input> element of type hidden, the input's value is automatically set by
     *             the user agent to the character encoding being used to submit the form.
     * isindex: For historical reasons, the name isindex is not allowed.
     *
     * The name attribute creates a unique behavior for radio buttons.
     *
     * Only one radio button in a same-named group of radio buttons can be checked at a time. Selecting any radio button
     * in that group automatically deselects any currently-selected radio button in the same group. The value of that
     * one checked radio button is sent along with the name if the form is submitted,
     *
     * When tabbing into a series of same-named group of radio buttons, if one is checked, that one will receive focus.
     * If they aren't grouped together in source order, if one of the group is checked, tabbing into the group starts
     * when the first one in the group is encountered, skipping all those that aren't checked. In other words, if one is
     * checked, tabbing skips the unchecked radio buttons in the group. If none are checked, the radio button group
     * receives focus when the first button in the same name group is reached.
     *
     * Once one of the radio buttons in a group has focus, using the arrow keys will navigate through all the radio
     * buttons of the same name, even if the radio buttons are not grouped together in the source order.
     */
    public string $name = '';

    /**
     * The input control's value. When specified in the HTML, this is the initial value, and from then on it can be
     * altered or retrieved at any time using JavaScript to access the respective HTMLInputElement object's value
     * property. The value attribute is always optional, though should be considered mandatory for checkbox, radio,
     * and hidden.
     */
    public string $value = '';

    /**
     * Set the generic input attributes.
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function setGenericInputAttributes(AttributeCollection &$specificAttributes, ?string $type = null): void
    {
        if ($this->disabled) {
            $specificAttributes->add(['disabled']);
        }
        if (! empty($this->form)) {
            $specificAttributes->add(['form' => $this->form]);
        }
        if (! empty($this->name)) {
            if ($this->name === 'isindex') {
                throw new InvalidAttributeException('The name isindex is not allowed.');
            }
            $specificAttributes->add(['name' => $this->name]);
        }
        if (empty($this->value) && in_array($type, ['checkbox', 'radio', 'hidden'])) {
            throw new InvalidAttributeException(
                'The value attribute is mandatory for checkbox, radio, and hidden input types.'
            );
        } else {
            if ($type === 'image') {
                throw new InvalidAttributeException('The value attribute is not allowed for image.');
            }
            $specificAttributes->add(['value' => $this->value]);
        }
    }
}
