<?php

namespace CemAytan\Quotes;

use CemAytan\Quotes\View\Components\QuoteList;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class QuoteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/quotes.php', 'quotes');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/quotes.php' => config_path('quotes.php'),
        ]);
        $this->loadViewsFrom(__DIR__.'/resources/views', 'quote');
        $this->loadViewComponentsAs('package', [
            QuoteList::class
        ]);
    }
}
