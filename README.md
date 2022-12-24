
# Pay The Developer

A Laravel package to cajole website owners into paying up their fee without 
having to tamper with the code-flow of the application.


## Authors

- [@theadeyemiolayinka](https://www.github.com/theadeyemiolayinka)


## Installation

Installing the package is very seamless. Just run

```bash
$ composer require theadeyemiolayinka/pay-the-dev
```

You can also add the Service Provider to your app's `config/app.php`
```php
'providers' => [
    ...
    \TheAdeyemiOlayinka\PayTheDev\PayTheDevServiceProvider::class,
];
```

Then you can publish the resources using
```bash
$ php artisan pay-the-dev:install
```
    
## Usage/Examples

To use the package, add the `PTT_ENABLE` to your .env and set the value. i.e
```env
PTT_ENABLE=false
```
The package won't trigger the Pay The Developer page until `PTT_ENABLE` is set to `true`

The package is shipped with a default page that shows when enabled but you can change it to your choice by setting `PTT_VIEW_NAME` to the name of the view you want to use. e.g
```env
PTT_VIEW_NAME=login 
```

If you decide to use the shipped in webpage, you can change the location of the developer's website by setting the `PTT_DEVELOPER_WEBSITE` in the env. e.g
```env
PTT_DEVELOPER_WEBSITE=https://theadeyemiolayinka.netlify.app
```
## Support

For support, email olayinkaapps@gmail.com.

