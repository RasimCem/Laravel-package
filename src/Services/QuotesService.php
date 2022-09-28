<?php

namespace CemAytan\Quotes\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class QuotesService
{

    /**
     * @throws Exception
     */
    public function getByCategory(string $category)
    {
        $url = sprintf('%s/v1/quotes?category=%s', config('quotes.api-base-url'), $category);
        $response = Http::withHeaders([
            'X-Api-Key' => config('quotes.quotes-api-key')
        ])->get($url);
        if ($response->ok()) {

            return json_decode($response->body(), true)[0];
        }else{
            throw new Exception('Make sure you provided the correct API KEY.');
        }
    }
}
