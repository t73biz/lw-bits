<?php

namespace T73biz\LwBits\Components\SvgMathMl;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Math
 */
class Math extends Component
{
    use GlobalAttributes;

    /**
     * This enumerated attribute specifies how the enclosed MathML markup should be rendered.
     * It can have one of the following values:
     *
     * - block: Which means that this element will be displayed in its own block outside the current span of text and
     *          with math-style set to normal.
     * - inline: Which means that this element will be displayed inside the current span of text and with math-style set
     *           to compact.
     * If not present, its default value is inline.
     */
    public string $display = '';

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
        if (! empty($this->display)) {
            if (! in_array($this->display, ['block', 'inline'])) {
                throw new \T73biz\LwBits\Exceptions\InvalidAttributeException(
                    'The display attribute must be either block or inline.'
                );
            }
            $this->specificAttributes->add(['display' => $this->display]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::svg_math_ml.math',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
