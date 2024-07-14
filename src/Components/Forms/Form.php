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
 * Class Form
 */
class Form extends Component
{
    use GlobalAttributesTrait;

    /**
     * Space-separated character encodings the server accepts. The browser uses them in the order in which they
     * are listed. The default value means the same encoding as the page. (In previous versions of HTML, character
     * encodings could also be delimited by commas.)
     */
    public string $acceptCharset = '';

    /**
     * The URL that processes the form submission. This value can be overridden by a formaction attribute on
     * a <button>, <input type="submit">, or <input type="image"> element. This attribute is ignored when
     * method="dialog" is set.
     */
    public string $action = '';

    /**
     * If the value of the method attribute is post, enctype is the MIME type of the form submission. Possible
     * values:
     *      - application/x-www-form-urlencoded: The default value.
     *      - multipart/form-data: Use this if the form contains <input> elements with type=file.
     *      - text/plain: Useful for debugging purposes.
     * This value can be overridden by formenctype attributes on <button>, <input type="submit">, or <input
     * type="image"> elements.
     */
    public string $enctype = '';

    /**
     * The HTTP method to submit the form with. The only allowed methods/values are (case insensitive):
     *      - post: The POST method; form data sent as the request body.
     *      - get (default): The GET; form data appended to the action URL with a ? separator. Use this method
     *      when the form has no side effects.
     *      - dialog: When the form is inside a <dialog>, closes the dialog and causes a submit event to be
     *      fired on submission, without submitting data or clearing the form.
     * This value is overridden by formmethod attributes on <button>, <input type="submit">, or <input
     * type="image"> elements.
     */
    public string $method = '';

    /**
     * The name of the form. The value must not be the empty string, and must be unique among the form elements
     * in the forms collection that it is in, if any.
     */
    public string $name = '';

    /**
     * This Boolean attribute indicates that the form shouldn't be validated when submitted. If this attribute
     * is not set (and therefore the form is validated), it can be overridden by a formnovalidate attribute on
     * a <button>, <input type="submit">, or <input type="image"> element belonging to the form.
     */
    public bool $noValidate = false;

    /**
     * Controls the annotations and what kinds of links the form creates. Annotations include external,
     * nofollow, opener, noopener, and noreferrer. Link types include help, prev, next, search, and license.
     * The rel value is a space-separated list of these enumerated values.
     */
    public string $rel = '';

    /**
     * Indicates where to display the response after submitting the form. It is a name/keyword for a browsing
     * context (for example, tab, window, or iframe). The following keywords have special meanings:
     *      - _self (default): Load into the same browsing context as the current one.
     *      - _blank: Load into a new unnamed browsing context. This provides the same behavior as setting
     *      rel="noopener" which does not set window.opener.
     *      - _parent: Load into the parent browsing context of the current one. If no parent, behaves the
     *      same as _self.
     *      - _top: Load into the top-level browsing context (i.e., the browsing context that is an ancestor
     *      of the current one and has no parent). If no parent, behaves the same as _self.
     *      - _unfencedTop: Load the response from a form inside an embedded fenced frame into the top-level
     *      frame (i.e., traversing beyond the root of the fenced frame, unlike other reserved destinations).
     *      Only available inside fenced frames.
     * This value can be overridden by a formtarget attribute on a <button>, <input type="submit">, or <input
     * type="image"> element.
     */
    public string $target = '';

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
        if (! empty($this->acceptCharset)) {
            $this->specificAttributes->add(['accept-charset' => $this->acceptCharset]);
        }
        if (! empty($this->action)) {
            if (strtolower($this->method) === 'dialog') {
                throw new InvalidAttributeException(
                    'The action attribute is ignored when method="dialog" is set'
                );
            }
            $this->specificAttributes->add(['action' => $this->action]);
        }
        if (! empty($this->enctype)) {
            if (strtolower($this->method) !== 'post') {
                throw new InvalidAttributeException(
                    'The enctype attribute can only be used when the method attribute is set to post'
                );
            }
            if (! in_array(strtolower($this->enctype), ['application/x-www-form-urlencoded', 'multipart/form-data', 'text/plain'])) {
                throw new InvalidAttributeException(
                    'The enctype attribute must be one of application/x-www-form-urlencoded, multipart/form-data, or text/plain'
                );
            }
            $this->specificAttributes->add(['enctype' => $this->enctype]);
        }
        if (! empty($this->method)) {
            if (! in_array(strtolower($this->method), ['post', 'get', 'dialog'])) {
                throw new InvalidAttributeException(
                    'The method attribute must be one of post, get, or dialog'
                );
            }
            $this->specificAttributes->add(['method' => $this->method]);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
        if ($this->noValidate) {
            $this->specificAttributes->add(['novalidate']);
        }
        if (! empty($this->rel)) {
            $this->specificAttributes->add(['rel' => $this->rel]);
        }
        if (! empty($this->target)) {
            if (! in_array(strtolower($this->target), ['_self', '_blank', '_parent', '_top', '_unfencedTop'])) {
                throw new InvalidAttributeException(
                    'The target attribute must be one of _self, _blank, _parent, _top, or _unfencedTop'
                );
            }
            $this->specificAttributes->add(['target' => $this->target]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.form',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
