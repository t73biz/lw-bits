<?php

namespace T73biz\LwBits\Components\Interactive;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\AttributeTraits\GlobalAttributes;

/**
 * Class Details
 */
class Details extends Component
{
    use GlobalAttributes;

    /**
     * This attribute enables multiple <details> elements to be connected, with only one open at a time. This allows
     * developers to easily create UI features such as accordions without scripting.
     *
     * The name attribute specifies a group name — give multiple <details> elements the same name value to group them.
     * Only one of the grouped <details> elements can be open at a time — opening one will cause another to close. If
     * multiple grouped <details> elements are given the open attribute, only the first one in the source order will be
     * rendered open.
     */
    public string $name = '';

    /**
     * This Boolean attribute indicates whether the details — that is, the contents of the <details> element — are
     * currently visible. The details are shown when this attribute exists, or hidden when this attribute is absent.
     * By default, this attribute is absent which means the details are not visible.
     */
    public bool $open = false;

    /**
     * The specific attributes for the details element.
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
        if (! empty($this->name)) {
            $this->specificAttributes->add(['name' => $this->name]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::interactive.details',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
