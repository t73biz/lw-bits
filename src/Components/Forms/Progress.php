<?php

namespace T73biz\LwBits\Components\Forms;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Progress
 */
class Progress extends Component
{
    use GlobalAttributes;

    /**
     * max This attribute describes how much work the task indicated by the progress element requires. The max
     * attribute, if present, must have a value greater than 0 and be a valid integer. The default
     * value is 1.
     */
    public int $max = 1;

    /**
     * value This attribute specifies how much of the task that has been completed. It must be a valid integer
     * between 0 and max, or between 0 and 1 if max is omitted. If there is no value attribute, the progress bar
     * is indeterminate; this indicates that an activity is ongoing with no indication of how long it is expected
     * to take.
     */
    public int $value = 0;

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
        if ($this->max > 1) {
            $this->specificAttributes->add(['max' => $this->max]);
        }
        if ($this->value > 0) {
            $this->specificAttributes->add(['value' => $this->value]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.progress',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
