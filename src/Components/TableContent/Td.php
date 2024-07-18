<?php

namespace T73biz\LwBits\Components\TableContent;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Td
 */
class Td extends Component
{
    use GlobalAttributes;

    /**
     * Contains a non-negative integer value that indicates how many columns the data cell spans or extends. The default
     * value is 1. User agents dismiss values higher than 1000 as incorrect, setting to the default value (1).
     */
    public int $colspan = 0;

    /**
     * Contains a list of space-separated strings, each corresponding to the id attribute of the <th> elements that
     * provide headings for this table cell.
     */
    public string $headers = '';

    /**
     * Contains a non-negative integer value that indicates for how many rows the data cell spans or extends. The
     * default value is 1; if its value is set to 0, it extends until the end of the table grouping section (<thead>,
     * <tbody>, <tfoot>, even if implicitly defined), that the cell belongs to. Values higher than 65534 are clipped to
     * 65534.
     */
    public int $rowspan = 0;

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
        if ($this->colspan !== 0) {
            if ($this->colspan > 1000) {
                $this->colspan = 1;
            }
            $this->specificAttributes->add(['colspan' => $this->colspan]);
        }
        if (! empty($this->headers)) {
            $this->specificAttributes->add(['headers' => $this->headers]);
        }
        if ($this->rowspan !== 0) {
            if ($this->rowspan > 65534) {
                $this->rowspan = 65534;
            }
            $this->specificAttributes->add(['rowspan' => $this->rowspan]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::table_content.td',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
