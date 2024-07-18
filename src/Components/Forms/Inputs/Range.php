<?php

namespace T73biz\LwBits\Components\Forms\Inputs;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GenericInputAttributes;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;
use T73biz\LwBits\Components\AttributeTraits\ListAttribute;
use T73biz\LwBits\Components\AttributeTraits\MaxMinAttributes;
use T73biz\LwBits\Components\AttributeTraits\RequiredAttribute;
use T73biz\LwBits\Components\AttributeTraits\StepAttribute;

/**
 * Class Range
 */
class Range extends Component
{
    use GenericInputAttributes;
    use GlobalAttributes;
    use ListAttribute;
    use MaxMinAttributes;
    use RequiredAttribute;
    use StepAttribute;

    /**
     * The specific attributes for the Range component
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
        $this->setGenericInputAttributes($this->specificAttributes);
        $this->setListAttribute($this->specificAttributes);
        $this->setMaxMinAttributes($this->specificAttributes);
        $this->setRequiredAttribute($this->specificAttributes);
        $this->setStepAttribute($this->specificAttributes);
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.inputs.range',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
