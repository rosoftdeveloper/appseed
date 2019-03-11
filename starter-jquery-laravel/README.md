### Laravel Starter 
#### [AppSeed.us](https://www.appseed.us/?ref=github) - Full Stack web apps generator   


## Project Status: 

* Under development, active suport

## Dependencies

* Php 7.2, with extensions (you may check the version by typing `php -v`)
  * ext-mbstring
  * ext-openssl
  * ext-fileinfo
  * dom
  * pdo
  * mysql
* Composer - https://getcomposer.org/


## Setting up a development environment

* Create .env (based on .env.example)
  * edit database credentials (db name, user, password)
* Install dependencies:
    ```composer install```
* Create initial database provisioning (tables & test users)
    ```
    php artisan migrate
    ```

## Running the app

* Go to 'public' folder and type:
    ```
    php -S localhost:5000
    ```

## Trouble shooting

For any issues, please open an issue here or contact us on [Facebook (closed group)](https://www.facebook.com/groups/fullstack.apps.generator/)

## MIT License

Copyright (c) 2018 [AppSeed.us](https://www.appseed.us/?ref=github) | [RoSoft](https://www.rosoftware.ro/?ref=github)

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
