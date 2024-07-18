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
 * Class Th
 */
class Th extends Component
{
    use GlobalAttributes;

    /**
     * A short, abbreviated description of the header cell's content provided as an alternative label
     * to use for the header cell when referencing the cell in other contexts. Some user-agents, such as
     * speech readers, may present this description before the content itself.
     */
    public string $abbr = '';

    /**
     * A non-negative integer value indicating how many columns the header cell spans or extends. The
     * default value is 1. User agents dismiss values higher than 1000 as incorrect, defaulting such
     * values to 1.
     */
    public int $colspan = 0;

    /**
     * A list of space-separated strings corresponding to the id attributes of the <th> elements that
     * provide the headers for this header cell.
     */
    public string $headers = '';

    /**
     * A non-negative integer value indicating how many rows the header cell spans or extends. The
     * default value is 1; if its value is set to 0, the header cell will extend to the end of the table
     * grouping section (<thead>, <tbody>, <tfoot>, even if implicitly defined), that the <th> belongs
     * to. Values higher than 65534 are clipped at 65534.
     */
    public int $rowspan = 0;

    /**
     * Defines the cells that the header (defined in the <th>) element relates to. Possible enumerated
     * values are:
     * - row: the header relates to all cells of the row it belongs to;
     * - col: the header relates to all cells of the column it belongs to;
     * - rowgroup: the header belongs to a rowgroup and relates to all of its cells;
     * - colgroup: the header belongs to a colgroup and relates to all of its cells.
     * If the scope attribute is not specified, or its value is not row, col, rowgroup, or colgroup, then
     * browsers automatically select the set of cells to which the header cell applies.
     */
    public string $scope = '';

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
        if (! empty($this->abbr)) {
            $this->specificAttributes->add(['abbr' => $this->abbr]);
        }
        if ($this->colspan > 0) {
            if ($this->colspan > 1000) {
                $this->colspan = 1;
            }
            $this->specificAttributes->add(['colspan' => $this->colspan]);
        }
        if (! empty($this->headers)) {
            $this->specificAttributes->add(['headers' => $this->headers]);
        }
        if ($this->rowspan > 0) {
            if ($this->rowspan > 65534) {
                $this->rowspan = 65534;
            }
            $this->specificAttributes->add(['rowspan' => $this->rowspan]);
        }
        if (! empty($this->scope)) {
            if (! in_array($this->scope, ['row', 'col', 'rowgroup', 'colgroup'])) {
                $this->scope = '';
            }
            $this->specificAttributes->add(['scope' => $this->scope]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::table_content.th',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
