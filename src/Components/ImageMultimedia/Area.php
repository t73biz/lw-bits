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
use T73biz\LwBits\Exceptions\InvalidAttributeException;

/**
 * Class Area
 */
class Area extends Component
{
    use GlobalAttributesTrait;

    /**
     * A text string alternative to display on browsers that do not display images. The text should be phrased so that
     * it presents the user with the same kind of choice as the image would offer when displayed without the alternative
     * text. This attribute is required only if the href attribute is used.
     */
    public string $alt = '';

    /**
     * The coords attribute details the coordinates of the shape attribute in size, shape, and placement of an <area>.
     * This attribute must not be used if shape is set to default.
     *
     * rect: the value is x1,y1,x2,y2. The value specifies the coordinates of the top-left and bottom-right corner of
     * the rectangle. For example, in <area shape="rect" coords="0,0,253,27" href="#" target="_blank" alt="Mozilla"> the
     * coordinates are 0,0 and 253,27, indicating the top-left and bottom-right corners of the rectangle, respectively.
     *
     * circle: the value is x,y,radius. Value specifies the coordinates of the circle center and the radius. For example
     * <area shape="circle" coords="130,136,60" href="#" target="_blank" alt="MDN">
     * poly: the value is x1,y1,x2,y2,..,xn,yn. Value specifies the coordinates of the edges of the polygon. If the
     * first and last coordinate pairs are not the same, the browser will add the last coordinate pair to close the
     * polygon
     *
     * The values are numbers of CSS pixels.
     */
    public string $coords = '';

    /**
     * This attribute, if present, indicates that the author intends the hyperlink to be used for downloading a resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#download
     */
    public string $download = '';

    /**
     * The hyperlink target for the area. Its value is a valid URL. This attribute may be omitted; if so, the <area>
     * element does not represent a hyperlink.
     */
    public string $href = '';

    /**
     * Contains a space-separated list of URLs to which, when the hyperlink is followed, POST requests with the body
     * PING will be sent by the browser (in the background). Typically used for tracking.
     */
    public string $ping = '';

    /**
     * A string indicating which referrer to use when fetching the resource:
     *
     * - no-referrer: The Referer header will not be sent.
     * - no-referrer-when-downgrade: The Referer header will not be sent to origins without TLS (HTTPS).
     * - origin: The sent referrer will be limited to the origin of the referring page: its scheme, host, and port.
     * - origin-when-cross-origin: The referrer sent to other origins will be limited to the scheme, the host, and the
     *   port. Navigations on the same origin will still include the path.
     * - same-origin: A referrer will be sent for same origin, but cross-origin requests will contain no referrer
     *   information.
     * - strict-origin: Only send the origin of the document as the referrer when the protocol security level stays the
     *   same (HTTPS→HTTPS), but don't send it to a less secure destination (HTTPS→HTTP).
     * - strict-origin-when-cross-origin (default): Send a full URL when performing a same-origin request, only send the
     *   origin when the protocol security level stays the same (HTTPS→HTTPS), and send no header to a less secure
     *   destination (HTTPS→HTTP).
     * - unsafe-url: The referrer will include the origin and the path (but not the fragment, password, or username).
     *   This value is unsafe, because it leaks origins and paths from TLS-protected resources to insecure origins.
     */
    public string $referrerpolicy = '';

    /**
     * For anchors containing the href attribute, this attribute specifies the relationship of the target object to the
     * link object. The value is a space-separated list of link types. The values and their semantics will be registered
     * by some authority that might have meaning to the document author. The default relationship, if no other is given,
     * is void. Use this attribute only if the href attribute is present.
     */
    public string $rel = '';

    /**
     * The shape of the associated hot spot. The specifications for HTML defines the values rect, which defines a
     * rectangular region; circle, which defines a circular region; poly, which defines a polygon; and default, which
     * indicates the entire region beyond any defined shapes.
     */
    public string $shape = 'default';

    /**
     * A keyword or author-defined name of the browsing context to display the linked resource. The following keywords
     * have special meanings:
     *
     * - _self (default): Show the resource in the current browsing context.
     * - _blank: Show the resource in a new, unnamed browsing context.
     * - _parent: Show the resource in the parent browsing context of the current one, if the current page is inside a
     *   frame. If there is no parent, acts the same as _self.
     * - _top: Show the resource in the topmost browsing context (the browsing context that is an ancestor of the
     *   current one and has no parent). If there is no parent, acts the same as _self.
     *
     * Use this attribute only if the href attribute is present.
     *
     * Note: Setting target="_blank" on <area> elements implicitly provides the same rel behavior as setting
     * rel="noopener" which does not set window.opener. See browser compatibility for support status.
     */
    public string $target = '';

    /**
     * The specific attributes of the area element
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
        if (! empty($this->href)) {
            $this->specificAttributes->add(['href' => $this->href]);
            if (! empty($this->alt)) {
                $this->specificAttributes->add(['alt' => $this->alt]);
            } else {
                throw new InvalidAttributeException('The alt attribute is required if the href attribute is used');
            }
            if (! empty($this->rel)) {
                $this->specificAttributes->add(['rel' => $this->rel]);
            }
            if (! empty($this->target)) {
                $this->specificAttributes->add(['target' => $this->target]);
            }
        }
        if (! empty($this->shape)) {
            $this->specificAttributes->add(['shape' => $this->shape]);
            if ($this->shape === 'default') {
                $this->coords = '';
            }
        }
        if (! empty($this->coords)) {
            $this->specificAttributes->add(['coords' => $this->coords]);
        }
        if (! empty($this->download)) {
            $this->specificAttributes->add(['download']);
        }
        if (! empty($this->ping)) {
            $this->specificAttributes->add(['ping' => $this->ping]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::image_multimedia.area',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
