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
use T73biz\LwBits\Components\AttributeTraits\ListAttribute;
use T73biz\LwBits\Components\AttributeTraits\MaxlengthMinlengthAttributes;
use T73biz\LwBits\Components\AttributeTraits\PatternAttribute;
use T73biz\LwBits\Components\AttributeTraits\PlaceholderAttribute;
use T73biz\LwBits\Components\AttributeTraits\ReadonlyAttribute;
use T73biz\LwBits\Components\AttributeTraits\RequiredAttribute;
use T73biz\LwBits\Components\AttributeTraits\SizeAttribute;

/**
 * Class Text
 */
class Text extends Component
{
    use AutocompleteAttribute;
    use GenericInputAttributes;
    use GlobalAttributes;
    use ListAttribute;
    use MaxlengthMinlengthAttributes;
    use PatternAttribute;
    use PlaceholderAttribute;
    use ReadonlyAttribute;
    use RequiredAttribute;
    use SizeAttribute;

    /**
     * The specific attributes for the Text component
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
        $this->setListAttribute($this->specificAttributes);
        $this->setMaxlengthMinlengthAttributes($this->specificAttributes);
        $this->setPatternAttribute($this->specificAttributes);
        $this->setPlaceholderAttribute($this->specificAttributes);
        $this->setReadonlyAttribute($this->specificAttributes);
        $this->setRequiredAttribute($this->specificAttributes);
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.inputs.text',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
