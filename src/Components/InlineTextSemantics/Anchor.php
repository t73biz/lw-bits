<?php

namespace T73biz\LwBits\Components\InlineTextSemantics;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Anchor
 */
class Anchor extends Component
{
    use GlobalAttributesTrait;

    /**
     * Causes the browser to treat the linked URL as a download. Can be used with or without a filename value:
     */
    public string $download = '';

    /**
     * The URL that the hyperlink points to. Links are not restricted to HTTP-based URLs — they can use any URL scheme
     * supported by browsers:
     */
    public string $href = '';

    /**
     * This attribute indicates the language of the linked resource. It is purely advisory.
     * Allowed values are determined by BCP47 for HTML5 and by RFC1766 for HTML 4.01:
     */
    public string $hreflang = '';

    /**
     * A space-separated list of URLs. When the link is followed, the browser will send POST requests with the body PING
     * to the URLs. Typically used for tracking.
     */
    public string $ping = '';

    /**
     * How much of the referrer to send when following the link.
     *
     * no-referrer: The Referer header will not be sent.
     * no-referrer-when-downgrade: The Referer header will not be sent to origins without TLS (HTTPS).
     * origin: The sent referrer will be limited to the origin of the referring page: its scheme, host, and port.
     * origin-when-cross-origin: The referrer sent to other origins will be limited to the scheme, the host, and the
     *      port. Navigations on the same origin will still include the path.
     * same-origin: A referrer will be sent for same origin, but cross-origin requests will contain no referrer information.
     * strict-origin: Only send the origin of the document as the referrer when the protocol security level stays the
     *      same (HTTPS→HTTPS), but don't send it to a less secure destination (HTTPS→HTTP).
     * strict-origin-when-cross-origin (default): Send a full URL when performing a same-origin request, only send the
     *      origin when the protocol security level stays the same (HTTPS→HTTPS), and send no header to a less secure
     *      destination (HTTPS→HTTP).
     * unsafe-url: The referrer will include the origin and the path (but not the fragment, password, or username).
     *      This value is unsafe, because it leaks origins and paths from TLS-protected resources to insecure origins.
     */
    public string $referrerPolicy = '';

    /**
     * The relationship of the linked URL as space-separated link types.
     */
    public string $rel = '';

    /**
     * Where to display the linked URL, as the name for a browsing context (a tab, window, or <iframe>). The following
     * keywords have special meanings for where to load the URL:
     *
     * _self: The current browsing context. (Default)
     * _blank: Usually a new tab, but users can configure browsers to open a new window instead.
     * _parent: The parent browsing context of the current one. If no parent, behaves as _self.
     * _top: The topmost browsing context. To be specific, this means the "highest" context that's an ancestor of the
     *      current one. If no ancestors, behaves as _self.
     * _unfencedTop: Allows embedded fenced frames to navigate the top-level frame (i.e. traversing beyond the root of
     *      the fenced frame, unlike other reserved destinations). Note that the navigation will still succeed if this
     *      is used outside of a fenced frame context, but it will not act like a reserved keyword.
     */
    public string $target = '';

    /**
     * Hints at the linked URL's format with a MIME type. No built-in functionality.
     */
    public string $type = '';

    /**
     * @var \Livewire\Features\SupportAttributes\AttributeCollection
     *                                                               The specific attributes for the anchor <a> element
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
        if (! empty($this->download)) {
            $this->specificAttributes->add(['download' => $this->download]);
        }

        if (! empty($this->href)) {
            $this->specificAttributes->add(['href' => $this->href]);
        }

        if (! empty($this->hreflang)) {
            $this->specificAttributes->add(['hreflang' => $this->hreflang]);
        }

        if (! empty($this->ping)) {
            $this->specificAttributes->add(['ping' => $this->ping]);
        }

        if (! empty($this->referrerPolicy)) {
            $this->specificAttributes->add(['referrerpolicy' => $this->referrerPolicy]);
        }

        if (! empty($this->rel)) {
            $this->specificAttributes->add(['rel' => $this->rel]);
        }

        if (! empty($this->target)) {
            $this->specificAttributes->add(['target' => $this->target]);
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
            'lw-bits::inline_text_semantics.anchor',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
