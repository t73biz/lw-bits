<?php

namespace T73biz\LwBits\Components\Demarcation;

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
 * Class Del
 */
class Del extends Component
{
    use GlobalAttributesTrait;

    /**
     * A URI for a resource that explains the change (for example, meeting minutes).
     */
    public string $cite = '';

    /**
     * This attribute indicates the time and date of the change and must be a valid date string with an optional time.
     * If the value cannot be parsed as a date with an optional time string, the element does not have an associated
     * timestamp. For the format of the string without a time, see Date strings. The format of the string if it includes
     * both date and time is covered in Local date and time strings.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Date_and_time_formats#date_strings
     */
    public ?Carbon $datetime = null;

    /**
     * The specific attributes for the del element
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
        if (! empty($this->cite)) {
            $this->specificAttributes->add(['cite' => $this->cite]);
        }
        if (is_a($this->datetime, Carbon::class)) {
            $this->specificAttributes->add(['datetime' => $this->datetime->toDateTimeLocalString()]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::demarcation.del',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
