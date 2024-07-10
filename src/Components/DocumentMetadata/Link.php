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
 * Class Link
 */
class Link extends Component
{
    use GlobalAttributesTrait;

    /**
     * This attribute is required when rel="preload" has been set on the <link> element, optional when rel="modulepreload"
     * has been set, and otherwise should not be used. It specifies the type of content being loaded by the <link>, which
     * is necessary for request matching, application of correct content security policy, and setting of correct Accept
     * request header.
     */
    public string $as = '';

    /**
     * This attribute explicitly indicates that certain operations should be blocked on the fetching of an external
     * resource. It must only be used when the rel attribute contains expect or stylesheet keywords. The operations that
     * are to be blocked must be a space-separated list of blocking tokens listed below.
     *
     * render: The rendering of content on the screen is blocked.
     */
    public string $blocking = '';

    /**
     * This attribute specifies the CORS settings for the cross-origin request for the resource. The CORS settings are
     * used to control how the element can be shared across origins. The CORS settings must be one of the following:
     * - anonymous: The resource can be shared with any origin.
     * - use-credentials: The resource can be shared with the requesting origin.
     */
    public string $crossorigin = '';

    /**
     * For rel="stylesheet" only, the disabled Boolean attribute indicates whether the described stylesheet should be
     * loaded and applied to the document. If disabled is specified in the HTML when it is loaded, the stylesheet will
     * not be loaded during page load. Instead, the stylesheet will be loaded on-demand, if and when the disabled
     * attribute is changed to false or removed.
     *
     * Setting the disabled property in the DOM causes the stylesheet to be removed from the document's
     * Document.styleSheets list.
     */
    public bool $disabled = false;

    /**
     * Provides a hint of the relative priority to use when fetching a preloaded resource. Allowed values:
     *
     * - high Signals a high-priority fetch relative to other resources of the same type.
     * - low Signals a low-priority fetch relative to other resources of the same type.
     * - auto Default: Signals automatic determination of fetch priority relative to other resources of the same type.
     */
    public string $fetchPriority = '';

    /**
     * This attribute specifies the URL of the linked resource. A URL can be absolute or relative.
     */
    public string $href = '';

    /**
     * This attribute specifies the language of the linked resource. It is purely advisory. Allowed values are determined
     * by BCP47 for HTML5 and by RFC7231 for HTML 4.01.
     */
    public string $hreflang = '';

    /**
     * For rel="preload" and as="image" only, the imagesizes attribute is a sizes attribute that indicates to preload
     * the appropriate resource used by an img element with corresponding values for its srcset and sizes attributes.
     */
    public string $imagesizes = '';

    /**
     * For rel="preload" and as="image" only, the imagesrcset attribute is a srcset attribute that indicates to preload
     * the appropriate resource used by an img element with corresponding values for its srcset and sizes attributes.
     */
    public string $imagesrcset = '';

    /**
     * Contains inline metadata — a base64-encoded cryptographic hash of the resource (file) you're telling the browser
     * to fetch. The browser can use this to verify that the fetched resource has been delivered without unexpected
     * manipulation. The attribute must only be specified when the rel attribute is specified to stylesheet, preload,
     * or modulepreload.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/Security/Subresource_Integrity
     */
    public string $integrity = '';

    /**
     * This attribute specifies the media that the linked resource applies to. Its value must be a media type / media
     * query. This attribute is mainly useful when linking to external stylesheets — it allows the user agent to pick
     * the best adapted one for the device it runs on.
     */
    public string $media = '';

    /**
     * A string indicating which referrer to use when fetching the resource:
     *
     * - no-referrer means that the Referer header will not be sent.
     * - no-referrer-when-downgrade means that no Referer header will be sent when navigating to an origin without TLS (HTTPS). This is a user agent's default behavior, if no policy is otherwise specified.
     * - origin means that the referrer will be the origin of the page, which is roughly the scheme, the host, and the port.
     * - origin-when-cross-origin means that navigating to other origins will be limited to the scheme, the host, and the port, while navigating on the same origin will include the referrer's path.
     * - unsafe-url means that the referrer will include the origin and the path (but not the fragment, password, or username). This case is unsafe because it can leak origins and paths from TLS-protected resources to insecure origins.
     */
    public string $referrerpolicy = '';

    /**
     * This attribute names a relationship of the linked document to the current document. The attribute must be a
     * space-separated list of link type values.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel
     */
    public string $rel = '';

    /**
     * This attribute defines the sizes of the icons for visual media contained in the resource. It must be present
     * only if the rel contains a value of icon or a non-standard type such as Apple's apple-touch-icon. It may have the
     * following values:
     *
     * - any, meaning that the icon can be scaled to any size as it is in a vector format, like image/svg+xml.
     * - a white-space separated list of sizes, each in the format <width in pixels>x<height in pixels> or <width in pixels>X<height in pixels>. Each of these sizes must be contained in the resource.
     */
    public string $sizes = '';

    /**
     * The title attribute has special semantics on the <link> element. When used on a <link rel="stylesheet"> it defines
     * a default or an alternate stylesheet.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/CSS/Alternative_style_sheets
     */
    public string $title = '';

    /**
     * This attribute is used to define the type of the content linked to. The value of the attribute should be a MIME
     * type such as text/html, text/css, and so on. The common use of this attribute is to define the type of stylesheet
     * being referenced (such as text/css), but given that CSS is the only stylesheet language used on the web, not only
     * is it possible to omit the type attribute, but is actually now recommended practice. It is also used on
     * rel="preload" link types, to make sure the browser only downloads file types that it supports.
     */
    public string $type = '';

    /**
     * Array of specific attributes for the link element.
     */
    private AttributeCollection $specificAttributes;

    /**
     * Standard mount function
     */
    public function mount(): void
    {
        $this->setGlobalAttributes();
        $this->specificAttributes = new AttributeCollection();
        if (! empty($this->as)) {
            $this->specificAttributes->add(['as' => $this->as]);
        }
        if (! empty($this->blocking)) {
            $this->specificAttributes->add(['blocking' => $this->blocking]);
        }
        if (! empty($this->crossorigin)) {
            $this->specificAttributes->add(['crossorigin' => $this->crossorigin]);
        }
        if ($this->disabled) {
            $this->specificAttributes->add(['disabled' => 'disabled']);
        }
        if (! empty($this->fetchPriority)) {
            $this->specificAttributes->add(['fetchPriority' => $this->fetchPriority]);
        }
        if (! empty($this->href)) {
            $this->specificAttributes->add(['href' => $this->href]);
        }
        if (! empty($this->hreflang)) {
            $this->specificAttributes->add(['hreflang' => $this->hreflang]);
        }
        if (! empty($this->imagesizes)) {
            $this->specificAttributes->add(['imagesizes' => $this->imagesizes]);
        }
        if (! empty($this->imagesrcset)) {
            $this->specificAttributes->add(['imagesrcset' => $this->imagesrcset]);
        }
        if (! empty($this->integrity)) {
            $this->specificAttributes->add(['integrity' => $this->integrity]);
        }
        if (! empty($this->media)) {
            $this->specificAttributes->add(['media' => $this->media]);
        }
        if (! empty($this->referrerpolicy)) {
            $this->specificAttributes->add(['referrerpolicy' => $this->referrerpolicy]);
        }
        if (! empty($this->rel)) {
            $this->specificAttributes->add(['rel' => $this->rel]);
        }
        if (! empty($this->sizes)) {
            $this->specificAttributes->add(['sizes' => $this->sizes]);
        }
        if (! empty($this->title)) {
            $this->specificAttributes->add(['title' => $this->title]);
        }
        if (! empty($this->type)) {
            $this->specificAttributes->add(['type' => $this->type]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::document_metadata.link',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
