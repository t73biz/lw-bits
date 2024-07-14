<?php

namespace T73biz\LwBits\Components\SvgMathMl;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Svg
 */
class Svg extends Component
{
    use GlobalAttributesTrait;

    /**
     * The displayed height of the rectangular viewport. (Not the height of its coordinate system.)
     * Value type: <length>|<percentage> ; Default value: auto; Animatable: yes
     */
    public string $height = '';

    /**
     * How the svg fragment must be deformed if it is displayed with a different aspect ratio.
     * Value type: (none| xMinYMin| xMidYMin| xMaxYMin| xMinYMid| xMidYMid| xMaxYMid| xMinYMax| xMidYMax| xMaxYMax)
     * (meet|slice)? ; Default value: xMidYMid meet; Animatable: yes
     */
    public string $preserveAspectRatio = 'xMidYMid meet';

    /**
     * The SVG viewport coordinates for the current SVG fragment.
     * Value type: <list-of-numbers> ; Default value: none; Animatable: yes
     */
    public string $viewBox = 'none';

    /**
     * The displayed width of the rectangular viewport. (Not the width of its coordinate system.)
     * Value type: <length>|<percentage> ; Default value: auto; Animatable: yes
     */
    public string $width = '';

    /**
     * The displayed x coordinate of the svg container. No effect on outermost svg elements.
     * Value type: <length>|<percentage> ; Default value: 0; Animatable: yes
     */
    public string $x = '0';

    /**
     * The displayed y coordinate of the svg container. No effect on outermost svg elements.
     * Value type: <length>|<percentage> ; Default value: 0; Animatable: yes
     */
    public string $y = '0';

    /**
     * The specific attributes for the embed component
     */
    private AttributeCollection $specificAttributes;

    /**
     * Standard mount function
     */
    public function mount(): void
    {
        $this->specificAttributes = new AttributeCollection();
        if (! empty($this->height)) {
            $this->specificAttributes->add(['height' => $this->height]);
        }
        if (! empty($this->preserveAspectRatio)) {
            $this->specificAttributes->add(['preserveAspectRatio' => $this->preserveAspectRatio]);
        }
        if (! empty($this->viewBox)) {
            $this->specificAttributes->add(['viewBox' => $this->viewBox]);
        }
        if (! empty($this->width)) {
            $this->specificAttributes->add(['width' => $this->width]);
        }
        if (! empty($this->x)) {
            $this->specificAttributes->add(['x' => $this->x]);
        }
        if (! empty($this->y)) {
            $this->specificAttributes->add(['y' => $this->y]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::svg_math_ml.svg',
            [
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
