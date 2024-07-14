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
 * Class Textarea
 */
class Textarea extends Component
{
    use GlobalAttributesTrait;

    /**
     * This attribute indicates whether the value of the control can be automatically completed by the browser.
     * Possible values are:
     *
     * - off: The user must explicitly enter a value into this field for every use, or the document provides its own
     *        auto-completion method; the browser does not automatically complete the entry.
     * - on: The browser automatically completes the value based on values that the user has entered during previous uses.
     *
     * If the autocomplete attribute is not specified on a <textarea> element, then the browser uses the autocomplete
     * attribute value of the <textarea> element's form owner. The form owner is either the <form> element that this
     * <textarea> element is a descendant of or the form element whose id is specified by the form attribute of the
     * input element. For more information, see the autocomplete attribute in <form>.
     */
    public string $autocomplete = '';

    /**
     * This Boolean attribute lets you specify that a form control should have input focus when the page loads. Only one
     * form-associated element in a document can have this attribute specified.
     */
    public bool $autofocus = false;

    /**
     * The visible width of the text control, in average character widths.
     * If it is specified, it must be a positive integer. If it is not specified, the default value is 20 (HTML5).
     */
    public int $cols = 20;

    /**
     * This attribute is used to indicate the text directionality of the element contents.
     * For more information, see the dirname attribute.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/dirname
     */
    public string $dirname = '';

    /**
     * This Boolean attribute indicates that the user cannot interact with the control. If this attribute is not
     * specified, the control inherits its setting from the containing element, for example <fieldset>; if there is no
     * containing element when the disabled attribute is set, the control is enabled.
     */
    public bool $disabled = false;

    /**
     * The form element that the <textarea> element is associated with (its "form owner"). The value of the attribute
     * must be the id of a form element in the same document. If this attribute is not specified, the <textarea> element
     * must be a descendant of a form element. This attribute enables you to place <textarea> elements anywhere within a
     * document, not just as descendants of form elements.
     */
    public string $form = '';

    /**
     * The maximum string length (measured in UTF-16 code units) that the user can enter. If this value isn't specified,
     * the user can enter an unlimited number of characters.
     */
    public int $maxlength = 0;

    /**
     * The minimum string length (measured in UTF-16 code units) required that the user should enter.
     */
    public int $minlength = 0;

    /**
     * Name of the textarea.
     */
    public string $name = '';

    /**
     * A hint to the user of what can be entered in the control. Carriage returns or line-feeds within the placeholder
     * text must be treated as line breaks when rendering the hint.
     *
     * Note: Placeholders should only be used to show an example of the type of data that should be entered into a form;
     * They are not a substitute for a proper <label> element tied to the input.
     * See <input> labels for a full explanation.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#labels
     */
    public string $placeholder = '';

    /**
     * This Boolean attribute indicates that the user cannot modify the value of the control. Unlike the disabled
     * attribute, the readonly attribute does not prevent the user from clicking or selecting in the control. The value
     * of a read-only control is still submitted with the form.
     */
    public bool $readonly = false;

    /**
     * Specifies that a textarea must be filled out before submitting the form.
     */
    public bool $required = false;

    /**
     * The number of visible text lines for the control. If it is specified, it must be a positive integer. If it is not
     * specified, the default value is 2.
     */
    public int $rows = 2;

    /**
     * Specifies how the text in a textarea is to be wrapped when submitted in a form.
     * Possible values are:
     *
     * - hard: The text in the textarea is wrapped (contains newlines) when it is submitted in a form.
     * This is useful when the textarea is used to capture flowing text, like in an email message for example.
     * With "hard", the columns attribute specifies the number of characters per line. The newlines
     * will become part of the field's value. This behavior is like the textarea in HTML 4.01.
     * - soft: The text in the textarea is not wrapped when it is sent in a form. This is the default
     * value. With "soft", the rows and cols attributes decide the shape of the field. If a field's
     * value contains more text than the field can display, the field displays scroll bars.
     */
    public string $wrap = '';

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
        if ($this->autocomplete) {
            if (! in_array($this->autocomplete, ['off', 'on'])) {
                throw new InvalidAttributeException('The autocomplete attribute must be either "off" or "on".');
            }
            $this->specificAttributes->add(['autocomplete' => $this->autocomplete]);
        }
        if ($this->autofocus) {
            $this->specificAttributes->add(['autofocus']);
        }
        if ($this->cols > 0) {
            $this->specificAttributes->add(['cols' => $this->cols]);
        }
        if (! empty($this->dirname)) {
            $this->specificAttributes->add(['dirname' => $this->dirname]);
        }
        if ($this->disabled) {
            $this->specificAttributes->add(['disabled']);
        }
        if (! empty($this->form)) {
            $this->specificAttributes->add(['form' => $this->form]);
        }
        if ($this->maxlength > 0) {
            $this->specificAttributes->add(['maxlength' => $this->maxlength]);
        }
        if ($this->minlength > 0) {
            $this->specificAttributes->add(['minlength' => $this->minlength]);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
        if (! empty($this->placeholder)) {
            $this->specificAttributes->add(['placeholder' => $this->placeholder]);
        }
        if ($this->readonly) {
            $this->specificAttributes->add(['readonly']);
        }
        if ($this->required) {
            $this->specificAttributes->add(['required']);
        }
        if ($this->rows > 0) {
            $this->specificAttributes->add(['rows' => $this->rows]);
        }
        if (! empty($this->wrap)) {
            if (! in_array($this->wrap, ['hard', 'soft'])) {
                throw new InvalidAttributeException('The wrap attribute must be either "hard" or "soft".');
            }
            $this->specificAttributes->add(['wrap' => $this->wrap]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.textarea',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
