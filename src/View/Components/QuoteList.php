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
    public function __construct(private QuoteHandler $handler)
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $quote = $this->handler->getRandomQuote(request()->getRequestUri());

        return view('quote::components.quote-list')->with([
            'quote' => $quote
        ]);
    }

}
