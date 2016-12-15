#MEAT | Coming Soon
Laravel package

### Installation
Install with composer
`composer require meat/coming-soon`

Add the service provider to your `config/app.php`

```php
$providers = [
    \Meat\ComingSoonServiceProvider::class
    ...
]
```

`php artisan vendor:publish` 

Edit your `config\coming-soon.php` 

Add `APP_COMINGSOON=true` to your `.env`

Add the middleware `comingsoon` to the routes you want to block until the goes live. 

```php 

Route::get('coming-soon', function() {
    return view('coming-soon');
});

Route::group(['middleware' => 'comingsoon'], function() {
    //All the blocked routes
    
    Route::get('/', 'HomeController@home');
    ...
});
 ```
