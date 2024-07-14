<?php

namespace T73biz\LwBits\Components\DocumentMetadata;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Meta
 */
class Meta extends Component
{
    use GlobalAttributesTrait;

    /**
     * This attribute declares the document's character encoding. If the attribute is present, its value must be an
     * ASCII case-insensitive match for the string "utf-8", because UTF-8 is the only valid encoding for HTML5 documents.
     * <meta> elements which declare a character encoding must be located entirely within the first 1024 bytes of the document.
     */
    public string $charset = 'utf-8';

    /**
     * This attribute contains the value for the http-equiv or name attribute, depending on which is used.
     */
    public string $content = '';

    /**
     * This enumerated attribute defines the pragma that can alter servers and user-agents behavior. The value of the
     * pragma is defined using the content attribute and can be one of the following:
     * - content-security-policy
     * - content-type
     * - default-style
     * - refresh
     * - set-cookie
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta#http-equiv
     */
    public string $httpEquiv = '';

    /**
     * The name and content attributes can be used together to provide document metadata in terms of name-value pairs,
     * with the name attribute giving the metadata name, and the content attribute giving the value.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta/name
     */
    public string $name = '';

    /**
     * Array of specific attributes for the meta element.
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
        if (! empty($this->charset)) {
            $this->specificAttributes->add(['charset' => $this->charset]);
        }
        if (! empty($this->content)) {
            $this->specificAttributes->add(['content' => $this->content]);
        }
        if (! empty($this->httpEquiv)) {
            $this->specificAttributes->add(['httpEquiv' => $this->httpEquiv]);
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
            'lw-bits::document_metadata.meta',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
