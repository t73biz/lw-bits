<?php

namespace T73biz\LwBits\Components\DocumentMetadata;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;
use T73biz\LwBits\Rules\MediaQuery;

/**
 * Class Style
 */
class Style extends Component
{
    use GlobalAttributes;

    /**
     * This attribute defines which media the style should be applied to. Its value is a media query, which defaults to
     * `all` if the attribute is missing.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_media_queries/Using_media_queries
     */
    public string $media = 'all';

    public string $title = '';

    /**
     * The specific attributes for the style element
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
        $rule = ['media' => [new MediaQuery()]];
        $validator = Validator::make(['media' => $this->media], $rule);
        if ($validator->passes()) {
            $this->specificAttributes->add(['media' => $this->media]);
        }
        if (! empty($this->title)) {
            $this->specificAttributes->add(['title' => $this->title]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::document_metadata.style',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
