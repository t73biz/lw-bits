<?php

namespace T73biz\LwBits\Components\TextContents;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Ol
 */
class Ol extends Component
{
    use GlobalAttributes;

    public bool $reversed = false;

    public int $start = 1;

    public string $type = '';

    /**
     * Array of specific attributes for the body element.
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
        if ($this->reversed) {
            $this->specificAttributes->add(['reversed' => 'reversed']);
        }
        if ($this->start) {
            $this->specificAttributes->add(['start' => $this->start]);
        }
        if ($this->type) {
            $this->specificAttributes->add(['type' => $this->type]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::text_contents.ol',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
