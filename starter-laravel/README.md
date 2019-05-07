## Express / React Starter 
### [AppSeed.us](https://www.appseed.us/?ref=github) - Full Stack web apps generator   

## Project Status: 

* Under development, incomplete documentation, active suport

## Setting up a development environment

* clone repo: git clone git@github.com:rosoftdeveloper/appseed.git
* change directory to starter-laravel: `cd appseed/starter-laravel`
* create a file named .env (copy .env.example file) which should contain the following default setup ( you should provide your own values to this variables ):
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=MY_DB_MANE
DB_USERNAME=MY_DB_USER
DB_PASSWORD=MY_DB_PASSWORD

JWT_SECRET=RuoxLtY4F3HvH3K0aVTkgLPTZu8IvlhJ
```

* Exec `composer install` This cmd witll install all required dependencies
* Exec `php artisan key:generate` to trigger laravel setup
* Exec `php artisan migrate:fresh --seed` to create tables and seed with data

## Running the app

* Go in the appseed/starter-laravel/public run in 
* Exec `php -S localhost:3000` to start the server
* Login route: /api/users/login [post: email, password],
* Demo credentials email: demo@appseed.us, password: demo & demo2@appseed.us, password: demo

Test with POSTMAN first.

Headers ```Content-Type: application/json```

Body/raw data: 
```
{
	"user": {
		"email": "demo2@appseed.us",
		"password": "demo"
	}
}
```

## Trouble shooting

* Support via @Github or [Facebook Group](https://www.facebook.com/groups/fullstack.apps.generator) 

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
