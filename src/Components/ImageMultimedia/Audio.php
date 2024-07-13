<?php

namespace T73biz\LwBits\Components\ImageMultimedia;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Audio
 */
class Audio extends Component
{
    use GlobalAttributesTrait;

    /**
     * A Boolean attribute; if specified, the video automatically begins to play back as soon as it can without stopping
     * to finish loading the data.
     *
     * Note: Modern browsers block audio (or videos with an unmuted audio track) from autoplaying, as sites that
     * automatically play audio can be an unpleasant experience for users. See our autoplay guide for additional
     * information about how to properly use autoplay.
     *
     * To disable video autoplay, autoplay="false" will not work; the video will autoplay if the attribute is there in
     * the <video> tag at all. To remove autoplay, the attribute needs to be removed altogether.
     */
    public bool $autoplay = false;

    /**
     * If this attribute is present, the browser will offer controls to allow the user to control video playback,
     * including volume, seeking, and pause/resume playback.
     */
    public bool $controls = false;

    /**
     * The controlslist attribute, when specified, helps the browser select what controls to show for the video element
     * whenever the browser shows its own set of controls (that is, when the controls attribute is specified).
     *
     * The allowed values are `nodownload`, `nofullscreen` and `noremoteplayback`.
     *
     * Use the disablepictureinpicture attribute if you want to disable the Picture-In-Picture mode (and the control).
     *
     * @see https://wicg.github.io/controls-list/explainer.html
     */
    public string $controlslist = '';

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
     * A Boolean attribute used to disable the capability of remote playback in devices that are attached using wired
     * (HDMI, DVI, etc.) and wireless technologies (Miracast, Chromecast, DLNA, AirPlay, etc.).
     *
     * In Safari, you can use x-webkit-airplay="deny" as a fallback.
     */
    public bool $disableremoteplayback = false;

    /**
     * A Boolean attribute; if specified, the browser will automatically seek back to the start upon reaching the end of
     * the video.
     */
    public bool $loop = false;

    /**
     * A Boolean attribute that indicates the default audio mute setting contained in the video. If set, the audio will
     * be initially silenced. Its default value is false, meaning the audio will be played when the video is played.
     */
    public bool $muted = false;

    /**
     * This enumerated attribute is intended to provide a hint to the browser about what the author thinks will lead to
     * the best user experience regarding what content is loaded before the video is played. It may have one of the
     * following values:
     *
     * - none: Indicates that the video should not be preloaded.
     * - metadata: Indicates that only video metadata (e.g. length) is fetched.
     * - auto: Indicates that the whole video file can be downloaded, even if the user is not expected to use it.
     * = empty string: A synonym of the auto value.
     * - The default value is different for each browser. The spec advises it to be set to metadata.
     *
     * Note:
     *
     * The autoplay attribute has precedence over preload. If autoplay is specified, the browser would obviously need to
     * start downloading the video for playback.
     * The specification does not force the browser to follow the value of this attribute; it is a mere hint.
     */
    public string $preload = '';

    /**
     * The URL of the video to embed. This is optional; you may instead use the <source> element within the video block
     * to specify the video to embed.
     */
    public string $src = '';

    /**
     * The specific attributes for the audio component
     */
    private AttributeCollection $specificAttributes;

    /**
     * Standard mount function
     */
    public function mount(): void
    {
        $this->setGlobalAttributes();
        $this->specificAttributes = new AttributeCollection();
        if ($this->autoplay) {
            $this->specificAttributes->add(['autoplay']);
        }
        if ($this->controls) {
            $this->specificAttributes->add(['controls']);
        }
        $allowedControlsListValues = ['nodownload', 'nofullscreen', 'noremoteplayback'];
        if (! empty($this->controlslist)
            && Str::contains($this->controlslist, $allowedControlsListValues)
        ) {
            $this->specificAttributes->add(['controlslist' => $this->controlslist]);
        }
        if (! empty($this->crossorigin) && in_array($this->crossorigin, ['anonymous', 'use-credentials'])) {
            $this->specificAttributes->add(['crossorigin' => $this->crossorigin]);
        }
        if ($this->disableremoteplayback) {
            $this->specificAttributes->add(['disableremoteplayback']);
        }
        if ($this->loop) {
            $this->specificAttributes->add(['loop']);
        }
        if ($this->muted) {
            $this->specificAttributes->add(['muted']);
        }
        if (! empty($this->preload)) {
            $this->specificAttributes->add(['preload' => $this->preload]);
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
            'lw-bits::image_multimedia.audio',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
