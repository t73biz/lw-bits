<?php

namespace T73biz\LwBits\Components\Sections;

use Illuminate\Contracts\Foundation\Application as ContractedApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractedView;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;
use T73biz\LwBits\Components\GlobalAttributesTrait;

/**
 * Class Div
 */
class Body extends Component
{
    use GlobalAttributesTrait;

    /**
     * Function to call after the user has printed the document.
     */
    public string $onAfterPrint = '';

    /**
     * Function to call before the user prints the document.
     */
    public string $onBeforePrint = '';

    /**
     * Function to call before the document is unloaded.
     */
    public string $onBeforeUnload = '';

    /**
     * Function to call when the document loses focus.
     */
    public string $onBlur = '';

    /**
     * Function to call when the document fails to load properly.
     */
    public string $onError = '';

    /**
     * Function to call when the document receives focus.
     */
    public string $onFocus = '';

    /**
     * Function to call when the fragment identifier part (starting with the hash ('#') character) of the document's
     * current address has changed.
     */
    public string $onHashChange = '';

    /**
     * Function to call when the preferred languages changed.
     */
    public string $onLanguageChange = '';

    /**
     * Function to call when the document has been loaded.
     */
    public string $onLoad = '';

    /**
     * Function to call when the document has received a message.
     */
    public string $onMessage = '';

    /**
     * Function to call when network communication has failed.
     */
    public string $onOffline = '';

    /**
     * Function to call when network communication has been restored.
     */
    public string $onOnline = '';

    /**
     * Function to call when the user has navigated session history.
     */
    public string $onPopState = '';

    /**
     * Function to call when the user has moved forward in undo transaction history.
     */
    public string $onRedo = '';

    /**
     * Function to call when the document view has been resized.
     */
    public string $onResize = '';

    /**
     * Function to call when the storage area has changed.
     */
    public string $onStorage = '';

    /**
     * Function to call when the user has moved backward in undo transaction history.
     */
    public string $onUndo = '';

    /**
     * Function to call when the document is about to be unloaded.
     */
    public string $onUnload = '';

    /**
     * Array of specific attributes for the body element.
     */
    private AttributeCollection $specificAttributes;

    /**
     * Standard mount function
     */
    public function mount(): void
    {
        $this->specificAttributes = new AttributeCollection();
        $this->setGlobalAttributes();
        if (! empty($this->onAfterPrint)) {
            $this->specificAttributes->add(['onafterprint' => $this->onAfterPrint]);
        }

        if (! empty($this->onBeforePrint)) {
            $this->specificAttributes->add(['onbeforeprint' => $this->onBeforePrint]);
        }

        if (! empty($this->onBeforeUnload)) {
            $this->specificAttributes->add(['onbeforeunload' => $this->onBeforeUnload]);
        }

        if (! empty($this->onBlur)) {
            $this->specificAttributes->add(['onblur' => $this->onBlur]);
        }

        if (! empty($this->onError)) {
            $this->specificAttributes->add(['onerror' => $this->onError]);
        }

        if (! empty($this->onFocus)) {
            $this->specificAttributes->add(['onfocus' => $this->onFocus]);
        }

        if (! empty($this->onHashChange)) {
            $this->specificAttributes->add(['onhashchange' => $this->onHashChange]);
        }

        if (! empty($this->onLanguageChange)) {
            $this->specificAttributes->add(['onlanguagechange' => $this->onLanguageChange]);
        }

        if (! empty($this->onLoad)) {
            $this->specificAttributes->add(['onload' => $this->onLoad]);
        }

        if (! empty($this->onMessage)) {
            $this->specificAttributes->add(['onmessage' => $this->onMessage]);
        }

        if (! empty($this->onOffline)) {
            $this->specificAttributes->add(['onoffline' => $this->onOffline]);
        }

        if (! empty($this->onOnline)) {
            $this->specificAttributes->add(['ononline' => $this->onOnline]);
        }

        if (! empty($this->onPopState)) {
            $this->specificAttributes->add(['onpopstate' => $this->onPopState]);
        }

        if (! empty($this->onRedo)) {
            $this->specificAttributes->add(['onredo' => $this->onRedo]);
        }

        if (! empty($this->onResize)) {
            $this->specificAttributes->add(['onresize' => $this->onResize]);
        }

        if (! empty($this->onStorage)) {
            $this->specificAttributes->add(['onstorage' => $this->onStorage]);
        }

        if (! empty($this->onUndo)) {
            $this->specificAttributes->add(['onundo' => $this->onUndo]);
        }

        if (! empty($this->onUnload)) {
            $this->specificAttributes->add(['onunload' => $this->onUnload]);
        }
    }

    /**
     * Standard render function
     */
    public function render(): Application|ContractedApplication|ContractedView|Factory|View
    {
        return view(
            'lw-bits::sections.body',
            [
                'globalAttributes' => $this->getGlobalAttributes(),
                'specificAttributes' => $this->parseAttributes($this->specificAttributes),
                'slot' => '',
            ]
        );
    }
}
