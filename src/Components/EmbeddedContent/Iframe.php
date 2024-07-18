<?php

namespace T73biz\LwBits\Components\EmbeddedContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\DimensionalAttributes;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Iframe
 */
class Iframe extends Component
{
    use DimensionalAttributes;
    use GlobalAttributes;

    /**
     * Specifies a Permissions Policy for the <iframe>. The policy defines what features are available to the <iframe>
     * based on the origin of the request.
     */
    public string $allow = '';

    /**
     * Indicates when the browser should load the iframe.
     * - eager: Load the iframe immediately on page load (this is the default value).
     * - lazy: Defer loading of the iframe until it reaches a calculated distance from the visual viewport, as defined
     *         by the browser. The intent is to avoid using the network and storage bandwidth required to fetch the
     *         frame until the browser is reasonably certain that it will be needed. This improves the performance and
     *         cost in most typical use cases, in particular by reducing initial page load times.
     *
     * Note: Loading is only deferred when JavaScript is enabled. This is an anti-tracking measure.
     */
    public string $loading = '';

    /**
     * A targetable name for the embedded browsing context. This can be used in the target attribute of the <a>, <form>,
     * or <base> elements; the formtarget attribute of the <input> or <button> elements; or the windowName parameter in
     * the window.open() method.
     */
    public string $name = '';

    /**
     * Indicates which referrer to send when fetching the frame's resource:
     *
     * - no-referrer: The Referer header will not be sent.
     * - no-referrer-when-downgrade: The Referer header will not be sent to origins without TLS (HTTPS).
     * - origin: The sent referrer will be limited to the origin of the referring page: its scheme, host, and port.
     * - origin-when-cross-origin: The referrer sent to other origins will be limited to the scheme, the host, and the
     *                             port. Navigations on the same origin will still include the path.
     * - same-origin: A referrer will be sent for same origin, but cross-origin requests will contain no referrer
     *                information.
     * - strict-origin: Only send the origin of the document as the referrer when the protocol security level stays the
     *                  same (HTTPS→HTTPS), but don't send it to a less secure destination (HTTPS→HTTP).
     * - strict-origin-when-cross-origin (default): Send a full URL when performing a same-origin request, only send the
     *                                              origin when the protocol security level stays the same (HTTPS→HTTPS)
     *                                              and send no header to a less secure destination (HTTPS→HTTP).
     * - unsafe-url: The referrer will include the origin and the path (but not the fragment, password, or username).
     *               This value is unsafe, because it leaks origins and paths from TLS-protected resources to insecure
     *               origins.
     */
    public string $referrerpolicy = '';

    /**
     * Controls the restrictions applied to the content embedded in the <iframe>. The value of the attribute can either be
     * empty to apply all restrictions, or space-separated tokens to lift particular restrictions:
     *
     * - allow-downloads: Allows downloading files through an <a> or <area> element with the download attribute.
     * - allow-forms: Allows the page to submit forms. If not used, form submission does not trigger validation or data send.
     * - allow-modals: Allows the page to open modal windows and receive `BeforeUnloadEvent`.
     * - allow-orientation-lock: Allows the page to lock screen orientation.
     * - allow-pointer-lock: Allows the page to use the Pointer Lock API.
     * - allow-popups: Allows popups (from `Window.open()`, `target="_blank"`, `Window.showModalDialog()`).
     * - allow-popups-to-escape-sandbox: Lets a sandboxed document open a new browsing context without inheriting sandboxing
     *   flags.
     * - allow-presentation: Allows control over whether an iframe can start a presentation session.
     * - allow-same-origin: If not used, the resource always fails the same-origin policy.
     * - allow-scripts: Allows the page to run scripts.
     * - allow-storage-access-by-user-activation: Allows a document in the <iframe> to use the Storage Access API.
     * - allow-top-navigation: Lets the resource navigate the top-level browsing context (`_top`).
     * - allow-top-navigation-by-user-activation: Like allow-top-navigation, but only if initiated by a user gesture.
     * - allow-top-navigation-to-custom-protocols: Allows navigations to non-http protocols.
     *
     * Note:
     * - Do not use both `allow-scripts` and `allow-same-origin` when the embedded document has the same origin as the
     *   embedding page.
     * - Serve content displayed outside a sandboxed iframe from a separate origin to limit potential damage.
     * - Without `allow-forms` or `allow-popups-to-escape-sandbox`, form submission in a new browsing context will
     *   silently fail.
     */
    public string $sandbox = '';

    /**
     * The URL of the page to embed. Use a value of about:blank to embed an empty page that conforms to the same-origin
     * policy. Also note that programmatically removing an <iframe>'s src attribute (e.g. via Element.removeAttribute())
     * causes about:blank to be loaded in the frame in Firefox, Chromium-based browsers, and Safari/iOS.
     *
     * Note: The about:blank page uses the embedding document's URL as its base URL when resolving any relative URLs,
     * such as anchor links.
     */
    public string $src = '';

    /**
     * Inline HTML to embed, overriding the src attribute. Its content should follow the syntax of a full HTML document,
     * which includes the doctype directive, <html>, <body> tags, etc., although most of them can be omitted, leaving
     * only the body content. This doc will have about:srcdoc as its location. If a browser does not support the srcdoc
     * attribute, it will fall back to the URL in the src attribute.
     *
     * Note: The about:srcdoc page uses the embedding document's URL as its base URL when resolving any relative URLs,
     * such as anchor links.
     */
    public string $srcdoc = '';

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
        $this->setDimensionalAttributes($this->specificAttributes);
        if (! empty($this->allow)) {
            $this->specificAttributes->add(['allow' => $this->allow]);
        }
        if (! empty($this->loading)) {
            if (! in_array($this->loading, ['eager', 'lazy'])) {
                throw new \T73biz\LwBits\Exceptions\InvalidAttributeException(
                    'The loading attribute must be either eager or lazy.'
                );
            }
            $this->specificAttributes->add(['loading' => $this->loading]);
        }
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
        if (! empty($this->referrerpolicy)) {
            if (! in_array(
                $this->referrerpolicy,
                [
                    'no-referrer',
                    'no-referrer-when-downgrade',
                    'origin',
                    'origin-when-cross-origin',
                    'same-origin',
                    'strict-origin',
                    'strict-origin-when-cross-origin',
                    'unsafe-url',
                ]
            )) {
                throw new \T73biz\LwBits\Exceptions\InvalidAttributeException(
                    'The referrerpolicy attribute must be one of no-referrer, no-referrer-when-downgrade, origin, '
                    .'origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, or '
                    .'unsafe-url.'
                );
            }
            $this->specificAttributes->add(['referrerpolicy' => $this->referrerpolicy]);
        }
        if (! empty($this->sandbox)) {
            if (! in_array(
                $this->sandbox,
                [
                    'allow-downloads',
                    'allow-forms',
                    'allow-modals',
                    'allow-orientation-lock',
                    'allow-pointer-lock',
                    'allow-popups',
                    'allow-popups-to-escape-sandbox',
                    'allow-presentation',
                    'allow-same-origin',
                    'allow-scripts',
                    'allow-storage-access-by-user-activation',
                    'allow-top-navigation',
                    'allow-top-navigation-by-user-activation',
                    'allow-top-navigation-to-custom-protocols',
                ]
            )) {
                throw new \T73biz\LwBits\Exceptions\InvalidAttributeException(
                    'The sandbox attribute must be one or more of allow-downloads, allow-forms, allow-modals, '
                    .'allow-orientation-lock, allow-pointer-lock, allow-popups, allow-popups-to-escape-sandbox, '
                    .'allow-presentation, allow-same-origin, allow-scripts, allow-storage-access-by-user-activation, '
                    .'allow-top-navigation, allow-top-navigation-by-user-activation, or allow-top-navigation-to-custom-protocols.'
                );
            }
            $this->specificAttributes->add(['sandbox' => $this->sandbox]);
        }
        if (! empty($this->src)) {
            $this->specificAttributes->add(['src' => $this->src]);
        }
        if (! empty($this->srcdoc)) {
            $this->specificAttributes->add(['srcdoc' => $this->srcdoc]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::embedded_content.iframe',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
