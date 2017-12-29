## Introduction

Lumen Horizon is based on the official [Laravel Horizon](https://github.com/laravel/horizon) package.

It provides the same features as original package except the dashboard UI because of the Lumen nature.
However all stats are available with Horizon [API routes](https://github.com/servocoder/lumen-horizon/blob/master/routes/web.php).
You are free to fetch and leverage the data on your own.

Alternatively, you can install another Laravel application with Horizon on the board to watch jobs and metrics of your Lumen applications.
Yep, the Laravel Horizon dashboard will show supervisor's processes that you run with Lumen. Enjoy!

Tested with **Lumen 5.5**


## Installation

The installation is almost the same as original package.

Note that the package namespace remains `Laravel\Horizon`, so don't install it along with original one to avoid conflicts.  

1. Composer dependency manager:

```bash
    composer require servocoder/lumen-horizon "~1.0"
```

Alternatively, add the dependency directly to your composer.json file:

```
    "require": {
        "servocoder/lumen-horizon": "~1.0"
    }
```

2. Publish `horizon.php` file to the config folder:

```bash
    php artisan vendor:publish --tag=horizon-config
```

or, as suggested in the official package docs:

```bash
    php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"
```


## Official Documentation

Documentation for Horizon can be found on the [Laravel website](http://laravel.com/docs/master/horizon).


## License

Laravel Horizon is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
