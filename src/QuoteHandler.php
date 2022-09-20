<?php

namespace CemAytan\Quotes;

class QuoteHandler
{
    public function getQuotes(string $pageName)
    {
        return config('quotes.quotes')[$pageName];
    }
}
