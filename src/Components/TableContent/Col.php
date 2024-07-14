<?php

namespace T73biz\LwBits\Components\TableContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Col
 */
class Col extends Component
{
    use GlobalAttributesTrait;

    /**
     * Specifies the number of consecutive columns the <col> element spans. The value must be a positive integer greater
     * than zero. If not present, its default value is 1.
     */
    public int $span = 1;

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
        if ($this->span !== 1) {
            $this->specificAttributes->add(['span' => $this->span]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::table_content.col',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
