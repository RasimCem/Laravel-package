## Laravel Quotes Package

### Install via Composer
`composer require cemaytan/quotes`

### Register package service provider
Go to config/app.php and add the given service provider. <br/>
`\CemAytan\Quotes\QuoteServiceProvider::class`

### Publish config file
You can change quotes by using this config file at config/quotes.php. <br/>
`php artisan vendor:publish`

### Usage
Call the quotes component in any blade view you want. Don't forget to specify uri on the config file.<br/>
`<x-package-quote-list/>` 

### Caution
Make sure you get the api key by the [Quotes API](https://api-ninjas.com/signin "Api Ninjas") and saved it to the published config file.
