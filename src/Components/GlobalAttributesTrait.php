<?php

namespace T73biz\LwBits\Components;

use Livewire\Features\SupportAttributes\AttributeCollection;

/**
 * Class GlobalElement
 *
 * Global attributes are attributes common to all HTML elements.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes
 */
trait GlobalAttributesTrait
{
    /**
     * Specifies a shortcut key to activate/focus an element.
     * AKA: accesskey attribute
     */
    public string $accesskey = '';

    /**
     * Specifies whether the element should automatically get focus when the page loads.
     * AKA: autocapitalize attribute
     */
    public bool $autocapitalize = false;

    /**
     * Specifies whether the element should automatically get focus when the page loads.
     * AKA: autofocus attribute
     */
    public bool $autofocus = false;

    /**
     * Specifies whether the content of an element is editable or not.
     * AKA: contenteditable attribute
     */
    public bool $contenteditable = false;

    /**
     * Specifies one or more classnames for an element (refers to a class in a style sheet).
     * AKA: class attribute
     */
    public array $cssClasses = [];

    /**
     * Allows the storage of custom data private to the page or application.
     * AKA: data-* attributes
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
     * Specifies the text direction for the content in an element.
     * AKA: dir attribute
     */
    public string $direction = '';

    /**
     * Specifies whether an element is draggable or not.
     * AKA: draggable attribute
     */
    public bool $draggable = false;

    /**
     * Specifies what action label (or icon) to present for the enter key on virtual keyboards.
     * AKA: enterkeyhint attribute
     */
    public string $enterkeyhint = '';

    /**
     * An enumerated attribute indicating that the element is not yet, or is no longer, relevant. For example,
     * it can be used to hide elements of the page that can't be used until the login process has been completed.
     * The browser won't render such elements.
     *
     * This attribute must not be used to hide content that could legitimately be shown.
     *
     * AKA: hidden attribute
     */
    public bool $hidden = false;

    /**
     * Specifies a unique id for an element.
     * AKA: id attribute
     */
    public string $id = '';

    /**
     * Specifies the language of the element's content.
     * AKA: lang attribute
     */
    public string $language = '';

    /**
     * A cryptographic nonce ("number used once") which can be used by Content Security Policy to determine whether
     * a given fetch will be allowed to proceed.
     * AKA: nonce attribute
     */
    public string $nonce = '';

    /**
     * A space-separated list of the part names of the element.
     * Part names allows CSS to select and style specific elements in a shadow tree via the ::part pseudo-element.
     * AKA: part attribute
     */
    public array $parts = [];

    /**
     * Used to designate an element as a popover element
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/API/Popover_API
     * AKA: popover attribute
     */
    public bool $popover = false;

    /**
     * Roles define the semantic meaning of content, allowing screen readers and other tools to present and support
     * interaction with an object in a way that is consistent with user expectations of that type of object. Roles are
     * added to HTML elements using role="role_type", where role_type is the name of a role in the ARIA specification.
     * AKA: role attribute
     */
    public string $role = '';

    /**
     * Assigns the slot info for a component
     */
    public $slot;

    /**
     * Assigns a slot in a shadow DOM shadow tree to an element: An element with a slot attribute is assigned to the
     * slot created by the <slot> element whose name attribute's value matches that slot attribute's value.
     * AKA: slot attribute
     */
    public string $slotAttribute = '';

    /**
     * Specifies whether the element is to have its spelling and grammar checked or not.
     * AKA: spellcheck attribute
     */
    public bool $spellcheck = false;

    /**
     * Specifies an inline CSS style for an element.
     * AKA: style attribute
     */
    public array $styles = [];

    /**
     * Specifies the tab order of an element.
     * AKA: tabindex attribute
     */
    public int $tabindex = 0;

    /**
     * Specifies extra information about an element (displayed as a tooltip).
     * AKA: title attribute
     */
    public string $title = '';

    /**
     * Specifies whether the content of an element should be translated or not.
     * AKA: translate attribute
     */
    public bool $translate = false;

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
        if ($this->contenteditable) {
            $this->attributes->add('contenteditable');
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
            $this->attributes->add(['dir' => $this->direction]);
        }
        if ($this->draggable) {
            $this->attributes->add('draggable');
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
        if ($this->spellcheck) {
            $this->attributes->add('spellcheck');
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
        if ($this->translate) {
            $this->attributes->add('translate');
        }
    }
}
