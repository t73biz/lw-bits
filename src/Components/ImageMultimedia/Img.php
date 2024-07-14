<?php

namespace T73biz\LwBits\Components\ImageMultimedia;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Img
 */
class Img extends Component
{
    use GlobalAttributesTrait;

    /**
     * Defines text that can replace the image in the page.
     */
    public string $alt = '';

    /**
     * This enumerated attribute indicates whether to use CORS to fetch the related video. CORS-enabled resources can be
     * reused in the <canvas> element without being tainted. The allowed values are:
     *
     * - anonymous
     *   Sends a cross-origin request without a credential. In other words, it sends the Origin: HTTP header without a
     *   cookie, X.509 certificate, or performing HTTP Basic authentication. If the server does not give credentials to
     *   the origin site (by not setting the Access-Control-Allow-Origin: HTTP header), the resource will be tainted,
     *   and its usage restricted.
     *
     * - use-credentials
     *   Sends a cross-origin request with a credential. It sends the Origin: HTTP header with a cookie, a certificate,
     *   or performing HTTP Basic authentication. If the server does not give credentials to the origin site
     *   (through Access-Control-Allow-Credentials: HTTP header), the resource will be tainted and its usage restricted.
     *
     * When not present, the resource is fetched without a CORS request (i.e. without sending the Origin: HTTP header),
     * preventing its non-tainted use in <canvas> elements. If invalid, it is handled as if the enumerated keyword
     * anonymous was used. See CORS settings attributes for additional information.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/crossorigin
     */
    public string $crossorigin = '';

    /**
     * This attribute provides a hint to the browser as to whether it should perform image decoding along with rendering
     * the other DOM content in a single presentation step that looks more "correct" (sync), or render and present the
     * other DOM content first and then decode the image and present it later (async). In practice, async means that the
     * next paint does not wait for the image to decode.
     *
     * It is often difficult to perceive any noticeable effect when using decoding on static <img> elements. They'll
     * likely be initially rendered as empty images while the image files are fetched (either from the network or from
     * the cache) and then handled independently anyway, so the "syncing" of content updates is less apparent. However,
     * the blocking of rendering while decoding happens, while often quite small, can be measured — even if it is
     * difficult to observe with the human eye. See What does the image decoding attribute actually do? for a more
     * detailed analysis (tunetheweb.com, 2023).
     *
     * @see https://www.tunetheweb.com/blog/what-does-the-image-decoding-attribute-actually-do/
     *
     * Using different decoding types can result in more noticeable differences when dynamically inserting <img>
     * elements into the DOM via JavaScript — see HTMLImageElement.decoding for more details.
     * @see https://developer.mozilla.org/en-US/docs/Web/API/HTMLImageElement/decoding
     *
     * Allowed values:
     *
     * - sync Decode the image synchronously along with rendering the other DOM content, and present everything together.
     * - async Decode the image asynchronously, after rendering and presenting the other DOM content.
     * - auto No preference for the decoding mode; This is the default value.
     */
    public string $decoding = '';

    /**
     * Marks the image for observation by the PerformanceElementTiming API. The value given becomes an identifier for
     * the observed image element. See also the elementtiming attribute page.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/PerformanceElementTiming
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/elementtiming
     */
    public string $elementtiming = '';

    /**
     * Provides a hint of the relative priority to use when fetching the image. Allowed values:
     *
     * - high Signals a high-priority fetch relative to other images.
     * - low Signals a low-priority fetch relative to other images.
     * - auto Default: Signals automatic determination of fetch priority relative to other images.
     */
    public string $fetchpriority = '';

    /**
     * The intrinsic height of the image, in pixels. Must be an integer without a unit.
     */
    public int $height = 0;

    /**
     * This boolean attribute indicates that the image is part of a server-side map. If so, the precise coordinates of a
     * click within the image are sent to the server.
     */
    public bool $ismap = false;

    /**
     * Indicates how the browser should load the image:
     *
     * - eager Loads the image immediately, regardless of whether or not the image is currently within the visible
     *   viewport (this is the default value).
     * - lazy Defers loading the image until it reaches a calculated distance from the viewport, as defined by the
     *   browser. The intent is to avoid the network and storage bandwidth needed to handle the image until it's
     *   reasonably certain that it will be needed. This generally improves the performance of the content in most
     *   typical use cases.
     */
    public string $loading = '';

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
     * One or more strings separated by commas, indicating a set of source sizes. Each source size consists of:
     *
     * A media condition. This must be omitted for the last item in the list.
     * A source size value.
     * Media Conditions describe properties of the viewport, not of the image. For example, (max-height: 500px) 1000px
     * proposes to use a source of 1000px width, if the viewport is not higher than 500px.
     *
     * Source size values specify the intended display size of the image. User agents use the current source size to
     * select one of the sources supplied by the srcset attribute, when those sources are described using width (w)
     * descriptors. The selected source size affects the intrinsic size of the image (the image's display size if no CSS
     * styling is applied). If the srcset attribute is absent, or contains no values with a width descriptor, then the
     * sizes attribute has no effect.
     */
    public string $sizes = '';

    /**
     * The image URL. Mandatory for the <img> element. On browsers supporting srcset, src is treated like a candidate
     * image with a pixel density descriptor 1x, unless an image with this pixel density descriptor is already defined
     * in srcset, or unless srcset contains w descriptors.
     */
    public string $src = '';

    /**
     * One or more strings separated by commas, indicating possible image sources for the user agent to use. Each string
     * is composed of:
     * - One URL.
     * - Optionally, whitespace followed by one of:
     *   - A width descriptor (a positive integer directly followed by 'w'). The width descriptor is divided by the
     *     actual image width in pixels, thus representing a 0..1 multiplication factor to be applied to the image in
     *     order to calculate a new width, thereby creating a third, intermediate density range
     *     (e.g. (max) 2x < n <= 2.1x).
     *   - A pixel density descriptor (a positive floating point number directly followed by 'x').
     * If no descriptor is specified, the source is assigned the default descriptor: 1x.
     * It is incorrect to mix width descriptors and pixel density descriptors in the same srcset attribute. Duplicate
     * descriptors (for instance, two sources in the same srcset which are both described with '2x') are invalid, too.
     * The user agent selects any one of the available sources at its discretion. This provides them with significant
     * leeway to tailor their selection based on things such as user preferences or bandwidth conditions.
     * See our Responsive images tutorial for an example.
     *
     * @see https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images
     */
    public string $srcset = '';

    /**
     * The partial URL (starting with #) of an image map associated with the element.
     *
     * Note: You cannot use this attribute if the <img> element is inside an <a> or <button> element.
     */
    public string $usemap = '';

    /**
     * The intrinsic width of the image in pixels. Must be an integer without a unit.
     */
    public int $width = 0;

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
        if (! empty($this->alt)) {
            $this->specificAttributes->add(['alt' => $this->alt]);
        }
        if (! empty($this->crossorigin)) {
            $this->specificAttributes->add(['crossorigin' => $this->crossorigin]);
        }
        if (! empty($this->decoding) && in_array($this->decoding, ['sync', 'async', 'auto'])) {
            $this->specificAttributes->add(['decoding' => $this->decoding]);
        }
        if (! empty($this->elementtiming)) {
            $this->specificAttributes->add(['elementtiming' => $this->elementtiming]);
        }
        if (! empty($this->fetchpriority) && in_array($this->fetchpriority, ['high', 'low', 'auto'])) {
            $this->specificAttributes->add(['fetchpriority' => $this->fetchpriority]);
        }
        if ($this->height > 0) {
            $this->specificAttributes->add(['height' => $this->height]);
        }
        if ($this->ismap) {
            $this->specificAttributes->add(['ismap']);
        }
        if (! empty($this->loading) && in_array($this->loading, ['eager', 'lazy'])) {
            $this->specificAttributes->add(['loading' => $this->loading]);
        }

        if (! empty($this->referrerpolicy) &&
            in_array(
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
            )
        ) {
            $this->specificAttributes->add(['referrerpolicy' => $this->referrerpolicy]);
        }
        if (! empty($this->sizes)) {
            $this->specificAttributes->add(['sizes' => $this->sizes]);
        }
        if (! empty($this->src)) {
            $this->specificAttributes->add(['src' => $this->src]);
        }
        if (! empty($this->srcset)) {
            $this->specificAttributes->add(['srcset' => $this->srcset]);
        }
        if (! empty($this->usemap)) {
            $this->specificAttributes->add(['usemap' => $this->usemap]);
        }
        if ($this->width > 0) {
            $this->specificAttributes->add(['width' => $this->width]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::image_multimedia.img',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
