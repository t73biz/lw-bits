<?php

namespace T73biz\LwBits\Components\Forms\Inputs;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\AutocompleteAttribute;
use T73biz\LwBits\Components\AttributeTraits\GenericInputAttributes;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;
use T73biz\LwBits\Components\AttributeTraits\MultipleAttribute;
use T73biz\LwBits\Components\AttributeTraits\RequiredAttribute;
use T73biz\LwBits\Exceptions\InvalidAttributeException;

/**
 * Class File
 */
class File extends Component
{
    use AutocompleteAttribute;
    use GenericInputAttributes;
    use GlobalAttributes;
    use MultipleAttribute;
    use RequiredAttribute;

    /**
     * The accept attribute takes as its value a comma-separated list of one or more file types, or unique file type
     * specifiers, describing which file types to allow.
     */
    public string $accept = '';

    /**
     * Introduced in the HTML Media Capture specification and valid for the file input type only, the capture attribute
     * defines which media—microphone, video, or camera—should be used to capture a new file for upload with file upload
     * control in supporting scenarios.
     * See the file input type.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file#capture
     */
    public string $capture = '';

    /**
     * The specific attributes for the File component
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
        $this->setAutocompleteAttribute($this->specificAttributes);
        $this->setGenericInputAttributes($this->specificAttributes);
        $this->setMultipleAttribute($this->specificAttributes);
        $this->setRequiredAttribute($this->specificAttributes);
        if (! empty($this->accept)) {
            $this->specificAttributes->add(['accept' => $this->accept]);
        }
        if (! empty($this->capture)) {
            if (! in_array($this->capture, ['user', 'environment'])) {
                throw new InvalidAttributeException('The capture attribute must be either "user" or "environment"');
            }
            $this->specificAttributes->add(['capture' => $this->capture]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.inputs.file',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
