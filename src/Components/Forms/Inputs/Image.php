<?php

namespace T73biz\LwBits\Components\Forms\Inputs;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\AltAttribute;
use T73biz\LwBits\Components\AttributeTraits\DimensionalAttributes;
use T73biz\LwBits\Components\AttributeTraits\FormRelatedAttributes;
use T73biz\LwBits\Components\AttributeTraits\GenericInputAttributes;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;
use T73biz\LwBits\Components\AttributeTraits\SrcAttribute;

/**
 * Class Image
 */
class Image extends Component
{
    use AltAttribute;
    use DimensionalAttributes;
    use FormRelatedAttributes;
    use GenericInputAttributes;
    use GlobalAttributes;
    use SrcAttribute;

    /**
     * The specific attributes for the Image component
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
        $this->setAltAttribute($this->specificAttributes);
        $this->setDimensionalAttributes($this->specificAttributes);
        $this->setGenericInputAttributes($this->specificAttributes);
        $this->setFormRelatedAttributes($this->specificAttributes, 'image');
        $this->setSrcAttribute($this->specificAttributes, true);
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.inputs.image',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
