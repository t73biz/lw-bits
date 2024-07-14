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
use T73biz\LwBits\Exceptions\InvalidAttributeException;

/**
 * Class Button
 */
class Button extends Component
{
    use GlobalAttributesTrait;

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
     * The URL that processes the information submitted by the button. Overrides the action attribute of the
     * button's form owner. Does nothing if there is no form owner.
     */
    public string $formaction = '';

    /**
     * If the button is a submit button (it's inside/associated with a <form> and doesn't have type="button"),
     * specifies how to encode the form data that is submitted. Possible values:
     * application/x-www-form-urlencoded: The default if the attribute is not used.
     * multipart/form-data: Used to submit <input> elements with their type attributes set to file.
     * text/plain: Specified as a debugging aid; shouldn't be used for real form submission. If this attribute is
     * specified, it overrides the enctype attribute of the button's form owner.
     */
    public string $formenctype = '';

    /**
     * If the button is a submit button (it's inside/associated with a <form> and doesn't have type="button"),
     * this attribute specifies the HTTP method used to submit the form. Possible values:
     * post: The data from the form are included in the body of the HTTP request when sent to the server. Use when
     * the form contains information that shouldn't be public, like login credentials.
     * get: The form data are appended to the form's action URL, with a ? as a separator, and the resulting URL
     * is sent to the server. Use this method when the form has no side effects, like search forms.
     * dialog: This method is used to indicate that the button closes the dialog with which it is associated, and
     * does not transmit the form data at all. If specified, this attribute overrides the method attribute of the
     * button's form owner.
     */
    public string $formmethod = '';

    /**
     * If the button is a submit button, this Boolean attribute specifies that the form is not to be validated when
     * it is submitted. If this attribute is specified, it overrides the novalidate attribute of the button's form
     * owner. This attribute is also available on <input type="image"> and <input type="submit"> elements.
     */
    public bool $formnovalidate = false;

    /**
     * If the button is a submit button, this attribute is an author-defined name or standardized, underscore-prefixed
     * keyword indicating where to display the response from submitting the form. This is the name of, or keyword for,
     * a browsing context (a tab, window, or <iframe>). If this attribute is specified, it overrides the target attribute
     * of the button's form owner. The following keywords have special meanings:
     * _self: Load the response into the same browsing context as the current one. This is the default if the attribute
     * is not specified.
     * _blank: Load the response into a new unnamed browsing context — usually a new tab or window, depending on the
     * user's browser settings.
     * _parent: Load the response into the parent browsing context of the current one. If there is no parent, this option
     * behaves the same way as _self.
     * _top: Load the response into the top-level browsing context (that is, the browsing context that is an ancestor of
     * the current one, and has no parent).
     *
     * If there is no parent, this option behaves the same way as _self.
     */
    public string $formtarget = '';

    /**
     * The name of the button, submitted as a pair with the button's value as part of the form data, when that button
     * is used to submit the form.
     */
    public string $name = '';

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
     * The default behavior of the button. Possible values are:
     * submit: The button submits the form data to the server. This is the default if the attribute is not specified
     * for buttons associated with a <form>, or if the attribute is an empty or invalid value.
     * reset: The button resets all the controls to their initial values, like <input type="reset">
     * (This behavior tends to annoy users.)
     * button: The button has no default behavior, and does nothing when pressed by default. It can have client-side
     * scripts listen to the element's events, which are triggered when the events occur.
     */
    public string $type = '';

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
        if ($this->disabled) {
            $this->specificAttributes->add(['disabled']);
        }
        if (! empty($this->form)) {
            $this->specificAttributes->add(['form' => $this->form]);
        }
        if (! empty($this->formaction)) {
            if (empty($this->form)) {
                throw new InvalidAttributeException('The formaction attribute requires form attribute to be set.');
            }
            $this->specificAttributes->add(['formaction' => $this->formaction]);
        }
        if (! empty($this->formenctype)) {
            if (empty($this->form)) {
                throw new InvalidAttributeException('The formenctype attribute requires form attribute to be set.');
            }
            if (! empty($this->type) && $this->type !== 'submit') {
                throw new InvalidAttributeException(
                    'The formenctype attribute requires type attribute to be set to submit.'
                );
            }
            if (! in_array($this->formenctype, ['application/x-www-form-urlencoded', 'multipart/form-data', 'text/plain'])) {
                throw new InvalidAttributeException(
                    'The formenctype attribute must be one of application/x-www-form-urlencoded, multipart/form-data, text/plain.'
                );
            }
            $this->specificAttributes->add(['formenctype' => $this->formenctype]);
        }
        if (! empty($this->formmethod)) {
            if (empty($this->form)) {
                throw new InvalidAttributeException(
                    'The formmethod attribute requires form attribute to be set.'
                );
            }
            if (! empty($this->type) && $this->type !== 'submit') {
                throw new InvalidAttributeException(
                    'The formmethod attribute requires type attribute to be set to submit.'
                );
            }
            if (! in_array($this->formmethod, ['post', 'get', 'dialog'])) {
                throw new InvalidAttributeException(
                    'The formmethod attribute must be one of post, get, or dialog.'
                );
            }
            $this->specificAttributes->add(['formmethod' => $this->formmethod]);
        }
        if ($this->formnovalidate) {
            if (empty($this->form)) {
                throw new InvalidAttributeException(
                    'The formnovalidate attribute requires form attribute to be set.'
                );
            }
            if (! empty($this->type) && $this->type !== 'submit') {
                throw new InvalidAttributeException(
                    'The formnovalidate attribute requires type attribute to be set to submit.'
                );
            }
            $this->specificAttributes->add(['formnovalidate']);
        }
        if (! empty($this->formtarget)) {
            if (empty($this->form)) {
                throw new InvalidAttributeException(
                    'The formtarget attribute requires form attribute to be set.'
                );
            }
            if (! empty($this->type) && $this->type !== 'submit') {
                throw new InvalidAttributeException(
                    'The formtarget attribute requires type attribute to be set to submit.'
                );
            }
            if (! in_array($this->formtarget, ['_self', '_blank', '_parent', '_top'])) {
                throw new InvalidAttributeException(
                    'The formtarget attribute must be one of _self, _blank, _parent, or _top.'
                );
            }
            $this->specificAttributes->add(['formtarget' => $this->formtarget]);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
        if (! empty($this->popovertarget)) {
            $this->specificAttributes->add(['popovertarget' => $this->popovertarget]);
        }
        if (! empty($this->popovertargetaction)) {
            if (! in_array($this->popovertargetaction, ['hide', 'show', 'toggle'])) {
                throw new InvalidAttributeException(
                    'The popovertargetaction attribute must be one of hide, show, or toggle.'
                );
            }
            $this->specificAttributes->add(['popovertargetaction' => $this->popovertargetaction]);
        }
        if (! empty($this->type)) {
            if (! in_array($this->type, ['submit', 'reset', 'button'])) {
                throw new InvalidAttributeException(
                    'The type attribute must be one of submit, reset, or button.'
                );
            }
            $this->specificAttributes->add(['type' => $this->type]);
        }
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
