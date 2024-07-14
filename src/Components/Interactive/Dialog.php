<?php

namespace T73biz\LwBits\Components\Interactive;

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
 * Class Dialog
 */
class Dialog extends Component
{
    use GlobalAttributesTrait;

    /**
     * Indicates that the dialog box is active and is available for interaction. If the open attribute is not set, the
     * dialog box will not be visible to the user. It is recommended to use the .show() or .showModal() method to render
     * dialogs, rather than the open attribute. If a <dialog> is opened using the open attribute, it is non-modal.
     */
    public bool $open = false;

    /**
     * The specific attributes for the dialog component
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
        if ($this->open) {
            $this->specificAttributes->add(['open']);
        }
        if (! empty($this->tabindex)) {
            throw new InvalidAttributeException('A dialog element should not have a tabindex attribute');
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::interactive.dialog',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
