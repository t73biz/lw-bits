<?php

namespace T73biz\LwBits\Components\TableContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Tr
 */
class Tr extends Component
{
    use GlobalAttributesTrait;

    /**
     * Standard mount function
     */
    public function mount(): void
    {
        $this->setGlobalAttributes();
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::table_content.tr',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'slot' => '',
            ]
        );
    }
}
