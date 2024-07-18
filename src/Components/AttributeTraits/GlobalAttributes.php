<?php

namespace T73biz\LwBits\Components\AttributeTraits;

use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

/**
 * Class GlobalElement
 *
 * Global attributes are attributes common to all HTML elements.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes
 */
trait GlobalAttributes
{
    /**
     * Provides a hint for generating a keyboard shortcut for the current element. This attribute consists of a
     * space-separated list of characters. The browser should use the first one that exists on the computer keyboard.
     */
    public string $accesskey = '';

    /**
     * Controls whether inputted text is automatically capitalized and, if so, in what manner.
     */
    public bool $autocapitalize = false;

    /**
     * Indicates that an element is to be focused on page load, or as soon as the <dialog> it is part of is displayed.
     * This attribute is a boolean, initially false.
     */
    public bool $autofocus = false;

    /**
     * An enumerated attribute indicating if the element should be editable by the user. If so, the browser modifies its
     * widget to allow editing. The attribute must take one of the following values:
     *
     * - true: (or the empty string), Indicates that the element must be editable;
     * - false: Indicates that the element must not be editable.
     * - plaintext-only: Indicates the element's raw text is editable, but rich text formatting is disabled.
     */
    public bool $contenteditable = false;

    /**
     * A space-separated list of the classes of the element. Classes allow CSS and JavaScript to select and access
     * specific elements via the class selectors or functions like the method Document.getElementsByClassName().
     */
    public array $cssClasses = [];

    /**
     * Forms a class of attributes, called custom data attributes, that allow proprietary information to be exchanged
     * between the HTML and its DOM representation that may be used by scripts. All such custom data are available via
     * the HTMLElement interface of the element the attribute is set on. The HTMLElement.dataset property gives access
     * to them.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset
     *
     * Requires a key-value pair array where the key is the attribute name and the value is the attribute value.
     * Example:
     * ```php
     * $this->data = [
     *    'name' => 'John Doe',
     * ];
     * ```
     * renders as:
     * ```html
     * <div data-name="John Doe"></div>
     * ```
     */
    public array $data = [];

    /**
     * An enumerated attribute indicating the directionality of the element's text. It can have the following values:
     *
     * - ltr: which means left to right and is to be used for languages that are written from the left to the right
     * - rtl: which means right to left and is to be used for languages that are written from the right to the left
     * - auto: which lets the user agent decide. It uses a basic algorithm as it parses the characters inside the
     *         element until it finds a character with a strong directionality, then it applies that directionality to
     *         the whole element.
     * AKA: dir attribute
     */
    public string $direction = '';

    /**
     * An enumerated attribute indicating whether the element can be dragged, using the Drag and Drop API.
     * It can have the following values:
     *
     * - true: Which indicates that the element may be dragged
     * - false: Which indicates that the element may not be dragged.
     */
    public string $draggable = '';

    /**
     * Hints what action label (or icon) to present for the enter key on virtual keyboards.
     */
    public string $enterkeyhint = '';

    /**
     * An enumerated attribute indicating that the element is not yet, or is no longer, relevant. For example,
     * it can be used to hide elements of the page that can't be used until the login process has been completed.
     * The browser won't render such elements.
     *
     * This attribute must not be used to hide content that could legitimately be shown.
     */
    public bool $hidden = false;

    /**
     * Defines a unique identifier (ID) which must be unique in the whole document. Its purpose is to identify the
     * element when linking (using a fragment identifier), scripting, or styling (with CSS).
     */
    public string $id = '';

    /**
     * Helps define the language of an element: the language that non-editable elements are in, or the language that
     * editable elements should be written in by the user. The attribute contains one "language tag" (made of
     * hyphen-separated "language subtags") in the format defined in RFC 5646: Tags for Identifying Languages (also
     * known as BCP 47). xml:lang has priority over it.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc5646
     */
    public string $language = '';

    /**
     * A cryptographic nonce ("number used once") which can be used by Content Security Policy to determine whether
     * a given fetch will be allowed to proceed.
     */
    public string $nonce = '';

    /**
     * A space-separated list of the part names of the element.
     * Part names allows CSS to select and style specific elements in a shadow tree via the ::part pseudo-element.
     */
    public array $parts = [];

    /**
     * Used to designate an element as a popover element (see Popover API). Popover elements are hidden via display:
     * none until opened via an invoking/control element (i.e. a <button> or <input type="button"> with a popovertarget
     * attribute) or a HTMLElement.showPopover() call.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/API/Popover_API
     */
    public bool $popover = false;

    /**
     * Roles define the semantic meaning of content, allowing screen readers and other tools to present and support
     * interaction with an object in a way that is consistent with user expectations of that type of object. Roles are
     * added to HTML elements using role="role_type", where role_type is the name of a role in the ARIA specification.
     */
    public string $role = '';

    /**
     * Assigns the slot info for a component. Part of the Livewire component API.
     */
    public $slot;

    /**
     * Assigns a slot in a shadow DOM shadow tree to an element: An element with a slot attribute is assigned to the
     * slot created by the <slot> element whose name attribute's value matches that slot attribute's value.
     */
    public string $slotAttribute = '';

    /**
     * An enumerated attribute defines whether the element may be checked for spelling errors.
     * It may have the following values:
     *
     * - empty string or true: Which indicates that the element should be, if possible, checked for spelling errors;
     * - false: Which indicates that the element should not be checked for spelling errors.
     */
    public ?string $spellcheck = null;

    /**
     * Contains CSS styling declarations to be applied to the element. Note that it is recommended for styles to be
     * defined in a separate file or files. This attribute and the <style> element have mainly the purpose of allowing
     * for quick styling, for example for testing purposes.
     */
    public array $styles = [];

    /**
     * An integer attribute indicating if the element can take input focus (is focusable), if it should participate to
     * sequential keyboard navigation, and if so, at what position. It can take several values:
     *
     * a negative value means that the element should be focusable, but should not be reachable via keyboard navigation;
     * 0 means that the element should be focusable and reachable via sequential keyboard navigation, but its relative
     * order is defined by the platform convention;
     * a positive value means that the element should be focusable and reachable via sequential keyboard navigation;
     * the order in which the elements are focused is the increasing value of the tabindex. If several elements share
     * the same tabindex, their relative order follows their relative positions in the document.
     */
    public int $tabindex = 0;

    /**
     * Contains a text representing advisory information related to the element it belongs to. Such information can
     * typically, but not necessarily, be presented to the user as a tooltip.
     */
    public string $title = '';

    /**
     * An enumerated attribute that is used to specify whether an element's attribute values and the values of its Text
     * node children are to be translated when the page is localized, or whether to leave them unchanged. It can have
     * the following values:
     *
     * - empty string or yes: Which indicates that the element will be translated.
     * - no: Which indicates that the element will not be translated.
     */
    public ?string $translate = null;

    /**
     * Get the global attributes
     */
    public function getGlobalAttributes(): string
    {
        return $this->parseAttributes($this->attributes);
    }

    /**
     * Parses the attributes collection into a string
     */
    private function parseAttributes(AttributeCollection $attributes): string
    {
        $attributeString = '';
        $attributes->each(function ($attribute) use (&$attributeString) {
            if (is_array($attribute)) {
                foreach ($attribute as $key => $value) {
                    $attributeString .= $key.'="'.$value.'" ';
                }
            } else {
                $attributeString .= $attribute.' ';
            }
        });

        return $attributeString;
    }

    /**
     * The attributes collection
     */
    protected AttributeCollection $attributes;

    /**
     * Set the global attributes
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function setGlobalAttributes(): void
    {
        $this->attributes = new AttributeCollection();
        if (! empty($this->accesskey)) {
            $this->attributes->add(['accesskey' => $this->accesskey]);
        }
        if ($this->autocapitalize) {
            $this->attributes->add('autocapitalize');
        }
        if ($this->autofocus) {
            $this->attributes->add('autofocus');
        }
        if (! empty($this->contenteditable)) {
            if (! in_array($this->contenteditable, ['true', 'false', 'plaintext-only'])) {
                throw new InvalidAttributeException(
                    'The contenteditable attribute must be one of true, false, or plaintext-only'
                );
            }
            $this->attributes->add(['contenteditable' => $this->contenteditable]);
        }
        if (! empty($this->cssClasses)) {
            $this->attributes->add(['class' => implode(' ', $this->cssClasses)]);
        }
        if (! empty($this->data)) {
            foreach ($this->data as $datum => $value) {
                $this->attributes->add(['data-'.$datum => $value]);
            }
        }
        if (! empty($this->direction)) {
            if (! in_array($this->direction, ['ltr', 'rtl', 'auto'])) {
                throw new InvalidAttributeException('The direction attribute must be one of ltr, rtl, or auto');
            }
            $this->attributes->add(['dir' => $this->direction]);
        }
        if (! empty($this->draggable)) {
            if (! in_array($this->draggable, ['true', 'false'])) {
                throw new InvalidAttributeException('The draggable attribute must be one of true or false');
            }
            $this->attributes->add(['draggable' => $this->draggable]);
        }
        if (! empty($this->enterkeyhint)) {
            $this->attributes->add(['enterkeyhint' => $this->enterkeyhint]);
        }
        if ($this->hidden) {
            $this->attributes->add('hidden');
        }
        if (! empty($this->id)) {
            $this->attributes->add(['id' => $this->id]);
        }
        if (! empty($this->language)) {
            $this->attributes->add(['lang' => $this->language]);
        }
        if (! empty($this->nonce)) {
            $this->attributes->add(['nonce' => $this->nonce]);
        }
        if (! empty($this->parts)) {
            $this->attributes->add(['part' => implode(' ', $this->parts)]);
        }
        if (! empty($this->popover)) {
            $this->attributes->add('popover');
        }
        if (! empty($this->role)) {
            $this->attributes->add(['role' => $this->role]);
        }
        if (! empty($this->slotAttribute)) {
            $this->attributes->add(['slot' => $this->slotAttribute]);
        }
        if (! is_null($this->spellcheck)) {
            if (empty($this->spellcheck)) {
                $this->spellcheck = 'true';
            }
            if (! in_array($this->spellcheck, ['true', 'false'])) {
                throw new InvalidAttributeException('The spellcheck attribute must be one of true or false');
            }
            $this->attributes->add(['spellcheck' => $this->spellcheck]);
        }
        if (! empty($this->styles)) {
            $styles = [];
            foreach ($this->styles as $property => $style) {
                $styles[] = $property.':'.$style;
            }
            $this->attributes->add(['style' => implode(';', $styles)]);
        }
        if (! empty($this->tabindex)) {
            $this->attributes->add(['tabindex' => $this->tabindex]);
        }
        if (! empty($this->title)) {
            $this->attributes->add(['title' => $this->title]);
        }
        if (isset($this->translate)) {
            if (empty($this->translate)) {
                $this->translate = 'yes';
            }
            if (! in_array($this->translate, ['yes', 'no'])) {
                throw new InvalidAttributeException('The translate attribute must be one of yes or no');
            }
            $this->attributes->add(['translate' => $this->translate]);
        }
    }
}
