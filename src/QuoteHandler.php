<?php

namespace CemAytan\Quotes;

class QuoteHandler
{
    public function getRandomQuote(string $uri)
    {
        if (!isset(config('quotes.quotes')[$uri])) return null;
        $quotes = config('quotes.quotes')[$uri];
        $numberOfQuotes = count($quotes);
        $randomIndex = rand(0, $numberOfQuotes-1);

        return $numberOfQuotes > 0 ? $quotes[$randomIndex] : null;
    }
}
