<?php

namespace T73biz\LwBits\Components\EmbeddedContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Portal
 */
class Portal extends Component
{
    use GlobalAttributesTrait;

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
     * The URL of the resource being embedded
     */
    public string $src = '';

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

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::embedded_content.portal',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
