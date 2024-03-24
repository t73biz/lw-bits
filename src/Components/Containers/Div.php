<?php

namespace T73biz\LwBits\Components\Containers;

use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Livewire\Component;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Div
 */
class Div extends Component
{
    use GlobalAttributesTrait;

    public function mount(): void
    {
        $this->setGlobalAttributes();
    }

    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::containers.div',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'slot' => '',
            ]
        );
    }
}
