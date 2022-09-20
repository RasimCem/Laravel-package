## Laravel Quotes Package

### Install via Composer
`composer require cemaytan/quotes`

### Register package service provider
Go to config/app.php and add the given service provider. <br/>
`\CemAytan\Quotes\QuoteServiceProvider::class`

### Publish config file
You can change quotes by using this config file at config/quotes.php . <br/>
`php artisan vendor:publish`

### Usage
Call the quotes component in any blade view you want with page name. Page names has to match with config/quotes.php .<br/>
`<x-package-quote-list page-name="philosophy"/>`


