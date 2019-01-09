## Fully functional website templates provided by [AppSeed.us](https://www.appseed.us/?ref=github)  - Coded in Laravel 5.7.*
No more lorem ipsun in your components.

### 1. Argon Designed by CreativeTim  - [DEMO](https://www.coded-app-laravel.appseed.us/)
<p align="center">
  <img width="1000" height="400" src="https://www.appseed.us/static/themes/enhanced-argon/thumbnail.jpg">
</p>

### 2. Now UI Kit Pro Designed by CreativeTim



## Features:
* Design: [Argon Design System](https://github.com/creativetimofficial/argon-design-system)
* Framework: [Laravel](https://laravel.com/) Version 5.7.*
* Auth System: [Laravel Authentication](https://laravel.com/docs/5.7/authentication)
* Architecture: theme based

## Requirements
* PHP 7.2 or higher
* [Composer download](https://getcomposer.org/) or [Composer documentation](https://getcomposer.org/doc/)

## Usage:

Please check [Laravel installation & Server requirements](https://laravel.com/docs/5.7/installation)

* copy [.env.example](https://github.com/rosoftdeveloper/appseed/blob/master/coded-apps/php-laravel-jq/.env.example) to .env [check Laravel configuration](https://laravel.com/docs/5.7/configuration)
* set your DB credentials in .env file
* create database & database user according to your .env configuration file
* this step requires [COMPOSER](https://getcomposer.org/). Use console and go in laravel root folder and execute cmd:
```
composer install
```
* use [Artisan](https://laravel.com/docs/5.7/artisan) to migrate your DB. From console go in laravel root folder and execute cmd:

```
php artisan migrate
```

* Start the web application from console. Go to "_Laravel root_ / _public_" folder and run cmd:

```
php -S localhost:5000
```

## License
* This project is released under MIT License

Copyright (c) 2018 AppSeed | RoSoftware.ro

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.





















## Install ( If exists vendors and .env )

1. create a database according to .env DB_CREDENTIALS or change them...
2. (cmd to project root directory) run: ```php artisan migrate```

## Install ( if there is no vendor directory and .env file )

1. (cmd to project root directory) run: ```composer install```
2. create a database
3. copy from root dir: .env.example to .env
4. replace this with your credentials:
    ````
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ````

5. (cmd to project root directory) run: ```php artisan migrate```
