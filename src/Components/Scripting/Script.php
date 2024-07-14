<?php

namespace T73biz\LwBits\Components\Scripting;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Script
 */
class Script extends Component
{
    use GlobalAttributesTrait;

    /**
     * For classic scripts, if the async attribute is present, then the classic script will be fetched in
     * parallel to parsing and evaluated as soon as it is available. For module scripts, if the async attribute
     * is present then the scripts and all their dependencies will be fetched in parallel to parsing and
     * evaluated as soon as they are available. Warning: This attribute must not be used if the src attribute is
     * absent (i.e. for inline scripts) for classic scripts, in this case it would have no effect. This attribute
     * allows the elimination of parser-blocking JavaScript where the browser would have to load and evaluate
     * scripts before continuing to parse.
     */
    public bool $async = false;

    /**
     * Normal script elements pass minimal information to the window.onerror for scripts which do not pass the
     * standard CORS checks. To allow error logging for sites which use a separate domain for static media, use
     * this attribute. See CORS settings attributes for a more descriptive explanation of its valid arguments.
     */
    public string $crossorigin = '';

    /**
     * This Boolean attribute is set to indicate to a browser that the script is meant to be executed after the
     * document has been parsed, but before firing DOMContentLoaded event. Scripts with the defer attribute will
     * prevent the DOMContentLoaded event from firing until the script has loaded and finished evaluating. Warning:
     * This attribute must not be used if the src attribute is absent (i.e. for inline scripts), in this case it
     * would have no effect. The defer attribute has no effect on module scripts — they defer by default. Scripts
     * with the defer attribute will execute in the order in which they appear in the document.
     */
    public bool $defer = false;

    /**
     * Provides a hint of the relative priority to use when fetching an external script.
     * Allowed values:
     * /**
     * Provides a hint of the relative priority to use when fetching an external script.
     * Allowed values:
     * high: Signals a high-priority fetch relative to other external scripts.
     * low: Signals a low-priority fetch relative to other external scripts.
     * auto: Default: Signals automatic determination of fetch priority relative to other external scripts.
     */
    public string $fetchpriority = '';

    /**
     * This attribute contains inline metadata that a user agent can use to verify that a fetched resource has
     * been delivered without unexpected manipulation. The attribute must not specified when the src attribute
     * is not specified.
     */
    public string $integrity = '';

    /**
     * This Boolean attribute is set to indicate that the script should not be executed in browsers that support
     * ES modules — in effect, this can be used to serve fallback scripts to older browsers that do not support
     * modular JavaScript code.
     */
    public bool $nomodule = false;

    /**
     * A cryptographic nonce (number used once) to allow scripts in a script-src Content-Security-Policy. The
     * server must generate a unique nonce value each time it transmits a policy. It is critical to provide a nonce
     * that cannot be guessed as bypassing a resource's policy is otherwise trivial.
     */
    public string $nonce = '';

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
     * This attribute specifies the URI of an external script; this can be used as an alternative to embedding a
     * script directly within a document.
     */
    public string $src = '';

    /**
     * This attribute indicates the type of script represented. The value of this attribute will be one of the
     * following: Attribute is not set (default), an empty string, or a JavaScript MIME type Indicates that the
     * script is a "classic script", containing JavaScript code. Authors are encouraged to omit the attribute if
     * the script refers to JavaScript code rather than specify a MIME type. JavaScript MIME types are listed in
     * the IANA media types specification. importmap This value indicates that the body of the element contains
     * an import map. The import map is a JSON object that developers can use to control how the browser resolves
     * module specifiers when importing JavaScript modules. module This value causes the code to be treated as a
     * JavaScript module. The processing of the script contents is deferred. The charset and defer attributes have
     * no effect. For information on using module, see our JavaScript modules guide. Unlike classic scripts, module
     * scripts require the use of the CORS protocol for cross-origin fetching.
     */
    public string $type = '';

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
        if (! empty($this->type)) {
            $this->specificAttributes->add(['type' => $this->type]);
        } else {
            if ($this->async && ! empty($this->src)) {
                $this->specificAttributes->add(['async']);
            }
            if (! empty($this->crossorigin)) {
                $this->specificAttributes->add(['crossorigin' => $this->crossorigin]);
            }
            if ($this->defer && ! empty($this->src)) {
                $this->specificAttributes->add(['defer']);
            }
            if (! empty($this->fetchpriority)) {
                if (! in_array($this->fetchpriority, ['high', 'low', 'auto'])) {
                    throw new \T73biz\LwBits\Exceptions\InvalidAttributeException(
                        'The fetchpriority attribute must be one of high, low, or auto.'
                    );
                }
                $this->specificAttributes->add(['fetchpriority' => $this->fetchpriority]);
            }
            if (! empty($this->integrity)) {
                $this->specificAttributes->add(['integrity' => $this->integrity]);
            }
            if ($this->nomodule) {
                $this->specificAttributes->add(['nomodule']);
            }
            if (! empty($this->nonce)) {
                $this->specificAttributes->add(['nonce' => $this->nonce]);
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
            if (! empty($this->src)) {
                $this->specificAttributes->add(['src' => $this->src]);
            }
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::scripting.script',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
