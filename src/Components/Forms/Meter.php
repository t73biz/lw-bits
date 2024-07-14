<?php

namespace T73biz\LwBits\Components\Forms;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Meter
 */
class Meter extends Component
{
    use GlobalAttributesTrait;

    /**
     * This optional attribute is used to explicitly set a <form> owner for the <meter> element. If
     * omitted, the <meter> is associated with its ancestor <form> element or the form association
     * set by the form attribute on another ancestor element, such as on a <fieldset>, if any. If
     * included, the value must be the id of a <form> in the same tree.
     */
    public string $form = '';

    /**
     * The lower numeric bound of the high end of the measured range. This must be less than the
     * maximum value (max attribute), and it also must be greater than the low value and minimum
     * value (low attribute and min attribute, respectively), if any are specified. If unspecified,
     * or if greater than the maximum value, the high value is equal to the maximum value.
     */
    public int $high = 1;

    /**
     * The upper numeric bound of the low end of the measured range. This must be greater than the
     * minimum value (min attribute), and it also must be less than the high value and maximum value
     * (high attribute and max attribute, respectively), if any are specified. If unspecified, or
     * if less than the minimum value, the low value is equal to the minimum value.
     */
    public int $low = 0;

    /**
     * The upper numeric bound of the measured range. This must be greater than the minimum value (min
     * attribute), if specified. If unspecified, the maximum value is 1.
     */
    public int $max = 1;

    /**
     * The lower numeric bound of the measured range. This must be less than the maximum value (max
     * attribute), if specified. If unspecified, the minimum value is 0.
     */
    public int $min = 0;

    /**
     * This attribute indicates the optimal numeric value. It must be within the range (as defined by
     * the min attribute and max attribute). When used with the low attribute and high attribute, it
     * gives an indication where along the range is considered preferable. For example, if it is
     * between the min attribute and the low attribute, then the lower range is considered preferred.
     * The browser may color the meter's bar differently depending on whether the value is less than
     * or equal to the optimum value.
     */
    public int $optimum = 0;

    /**
     * The current numeric value. This must be between the minimum and maximum values (min attribute
     * and max attribute) if they are specified. If unspecified or malformed, the value is 0. If
     * specified, but not within the range given by the min attribute and max attribute, the value
     * is equal to the nearest end of the range. Note: Unless the value attribute is between 0 and 1
     * (inclusive), the min and max attributes should define the range so that the value attribute's
     * value is within it.
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
        if (! empty($this->form)) {
            $this->specificAttributes->add(['form' => $this->form]);
        }
        if ($this->high !== 1) {
            $this->specificAttributes->add(['high' => $this->high]);
        }
        if ($this->low !== 0) {
            $this->specificAttributes->add(['low' => $this->low]);
        }
        if ($this->max !== 1) {
            $this->specificAttributes->add(['max' => $this->max]);
        }
        if ($this->min !== 0) {
            $this->specificAttributes->add(['min' => $this->min]);
        }
        if ($this->optimum !== 0) {
            $this->specificAttributes->add(['optimum' => $this->optimum]);
        }
        if ($this->value !== 0) {
            $this->specificAttributes->add(['value' => $this->value]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::forms.meter',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
