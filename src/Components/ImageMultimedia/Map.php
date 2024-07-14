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
 * Class Map
 */
class Map extends Component
{
    use GlobalAttributesTrait;

    /**
     * The name attribute gives the map a name so that it can be referenced. The attribute must be present and must have
     * a non-empty value with no space characters. The value of the name attribute must not be equal to the value of the
     * name attribute of another <map> element in the same document. If the id attribute is also specified, both
     * attributes must have the same value.
     */
    public string $name = '';

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
        if (! empty($this->name)) {
            if (! empty($this->id) && $this->id !== $this->name) {
                throw new InvalidAttributeException(
                    'The id attribute must have the same value as the name attribute.'
                );
            }
            $this->specificAttributes->add(['name' => $this->name]);
        } else {
            throw new InvalidAttributeException('The name attribute is required for the map element.');
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::image_multimedia.map',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
