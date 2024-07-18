<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

trait FormRelatedAttributes
{
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
     * Set the form related attributes.
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function setFormRelatedAttributes(AttributeCollection &$specificAttributes): void
    {
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
            if (! empty($this->type) && ! in_array($this->type, ['submit', 'image'])) {
                throw new InvalidAttributeException(
                    'The formenctype attribute requires type attribute to be set to submit or image.'
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
            if (! empty($this->type) && ! in_array($this->type, ['submit', 'image'])) {
                throw new InvalidAttributeException(
                    'The formmethod attribute requires type attribute to be set to submit or image.'
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
            if (! empty($this->type) && ! in_array($this->type, ['submit', 'image'])) {
                throw new InvalidAttributeException(
                    'The formnovalidate attribute requires type attribute to be set to submit or image.'
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
            if (! empty($this->type) && ! in_array($this->type, ['submit', 'image'])) {
                throw new InvalidAttributeException(
                    'The formtarget attribute requires type attribute to be set to submit or image.'
                );
            }
            if (! in_array($this->formtarget, ['_self', '_blank', '_parent', '_top'])) {
                throw new InvalidAttributeException(
                    'The formtarget attribute must be one of _self, _blank, _parent, or _top.'
                );
            }
            $this->specificAttributes->add(['formtarget' => $this->formtarget]);
        }
    }
}
