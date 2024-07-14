<?php

namespace T73biz\LwBits\Components\InlineTextSemantics;

use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Time
 */
class Time extends Component
{
    use GlobalAttributesTrait;

    private AttributeCollection $specificAttributes;

    /**
     * A valid date string
     */
    public ?Carbon $dateTime = null;

    /**
     * Standard mount function
     *
     * @throws \T73biz\LwBits\Exceptions\InvalidAttributeException
     */
    public function mount(): void
    {
        $this->setGlobalAttributes();
        $this->specificAttributes = new AttributeCollection();
        if (is_a($this->dateTime, Carbon::class)) {
            $this->specificAttributes->add(['datetime' => $this->dateTime->toDateTimeLocalString()]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::inline_text_semantics.time',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
