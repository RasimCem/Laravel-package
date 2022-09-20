<?php

namespace CemAytan\Quotes\View\Components;

use CemAytan\Quotes\QuoteHandler;
use Illuminate\View\Component;

class QuoteList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(private string $pageName, private QuoteHandler $handler)
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $quotes = $this->handler->getQuotes($this->pageName);

        return view('quote::components.quote-list')->with([
            'quotes' => $quotes
        ]);
    }

}
