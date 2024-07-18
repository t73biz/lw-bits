<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

trait PopoverRelatedAttributes
{
    /**
     * Turns a <button> element into a popover control button; takes the ID of the popover element to control as its
     * value. See the Popover API landing page for more details.
     */
    public string $popovertarget = '';

    /**
     * Specifies the action to be performed on a popover element being controlled by a control <button>. Possible values
     * are:
     * "hide" The button will hide a shown popover. If you try to hide an already hidden popover, no action will be taken.
     * "show" The button will show a hidden popover. If you try to show an already showing popover, no action will be taken.
     * "toggle" The button will toggle a popover between showing and hidden. If the popover is hidden, it will be shown; if
     * the popover is showing, it will be hidden. If popovertargetaction is omitted, "toggle" is the default action that
     * will be performed by the control button.
     */
    public string $popovertargetaction = '';

    /**
     * Set the popover attributes.
     *
     * @throws InvalidAttributeException
     */
    public function setPopoverAttributes(AttributeCollection &$specificAttributes): void
    {
        if (! empty($this->popovertarget)) {
            $specificAttributes->add(['popovertarget' => $this->popovertarget]);
        }
        if (! empty($this->popovertargetaction)) {
            if (! in_array($this->popovertargetaction, ['hide', 'show', 'toggle'])) {
                throw new InvalidAttributeException(
                    'The popovertargetaction attribute must be one of hide, show, or toggle.'
                );
            }
            $specificAttributes->add(['popovertargetaction' => $this->popovertargetaction]);
        }
    }
}
