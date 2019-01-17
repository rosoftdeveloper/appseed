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
