<?php

namespace T73biz\LwBits\Components\Scripting;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Canvas
 */
class Canvas extends Component
{
    use GlobalAttributesTrait;

    /**
     * The height of the coordinate space in CSS pixels. Defaults to 150.
     */
    public int $height = 0;

    /**
     * The width of the coordinate space in CSS pixels. Defaults to 300.
     */
    public int $width = 0;

    /**
     * The specific attributes for the embed component
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
        if ($this->height > 0) {
            $this->specificAttributes->add(['height' => $this->height]);
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
            'lw-bits::scripting.canvas',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
