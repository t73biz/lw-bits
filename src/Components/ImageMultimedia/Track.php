<?php

namespace T73biz\LwBits\Components\ImageMultimedia;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Track
 */
class Track extends Component
{
    use GlobalAttributes;

    /**
     * This attribute indicates that the track should be enabled unless the user's preferences indicate that another
     * track is more appropriate. This may only be used on one track element per media element.
     */
    public bool $default = false;

    /**
     * How the text track is meant to be used. If omitted the default kind is subtitles. If the attribute contains an invalid value, it will use metadata. The following keywords are allowed:
     *
     * - subtitles Subtitles provide translation of content that cannot be understood by the viewer. For example speech
     *   or text that is not English in an English language film.
     *   Subtitles may contain additional content, usually extra background information. For example the text at the
     *   beginning of the Star Wars films, or the date, time, and location of a scene.
     * - captions Closed captions provide a transcription and possibly a translation of audio. It may include important
     *   non-verbal information such as music cues or sound effects. It may indicate the cue's source
     *   (e.g. music, text, character). Suitable for users who are deaf or when the sound is muted.
     * - chapters Chapter titles are intended to be used when the user is navigating the media resource.
     * - metadata Tracks used by scripts. Not visible to the user.
     */
    public string $kind = 'subtitles';

    /**
     * A user-readable title of the text track which is used by the browser when listing available text tracks.
     */
    public string $label = '';

    /**
     * Address of the track (.vtt file). Must be a valid URL. This attribute must be specified and its URL value must
     * have the same origin as the document — unless the <audio> or <video> parent element of the track element has a
     * crossorigin attribute.
     */
    public string $src = '';

    /**
     * Language of the track text data. It must be a valid BCP 47 language tag. If the kind attribute is set to
     * subtitles, then srclang must be defined.
     *
     * @see https://r12a.github.io/app-subtags/
     */
    public string $srclang = 'en';

    /**
     * The specific attributes for the track element
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
        if ($this->default) {
            $this->specificAttributes->add(['default']);
        }
        if (! empty($this->kind)) {
            $this->specificAttributes->add(['kind' => $this->kind]);
            if ($this->kind === 'subtitles' && empty($this->srclang)) {
                throw new \InvalidArgumentException(
                    'The srclang attribute must be defined when the kind attribute is set to subtitles'
                );
            }
        }
        if (! empty($this->label)) {
            $this->specificAttributes->add(['label' => $this->label]);
        }
        if (! empty($this->src)) {
            $this->specificAttributes->add(['src' => $this->src]);
        }
        if (! empty($this->srclang)) {
            $this->specificAttributes->add(['srclang' => $this->srclang]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::image_multimedia.track',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
