
Express JWT Starter
====
Basic setup of express with JWT authentication (passport, passport-jwt), ES6.

## Requirements
- [Node.js](https://nodejs.org/) >= 6.x

## Authentication
Authentication is based on [json web tokens](https://jwt.io). `passport-jwt` strategy is used to handle the email / password authentication.
After a successful login the generated token is sent to the requester. 

## API
### Login: `api/users/login`
```
POST api/users/login
Host: localhost:3000
Content-Type: application/json

{
    "email": "demo@appseed.us",
    "password": "demo"
}
```

### Signup: `/api/users/signup`
```
POST api/users/signup
Host: localhost:3000
Content-Type: application/json

{
    "email": "demo@appseed.us",
    "password": "demo",
    "name": "George",
    "surname": "Clooney"
}
```

## Setting up for development
* clone repo: `git clone git@github.com:rosoftdeveloper/appseed.git` 
* change directory to starter-express: `cd appseed/starter-express`
* create a file named .env which should contain the following default setup:
```
SALT=35kj7waj3k5kja09jeoi21kn0pg13iuhlkn // used in password hashing
JWT_SECRET=secret        // used in JWT signing
SESSION_SECRET=secret    // used for session data
PORT=3000                // the port on which your server will be available on
SERVER_ADDRESS=127.0.0.1 // or 0.0.0.0 for all or other interface address you want to listen
```
* users are saved in file `config/users.js`

## Scripts
**Install Modules**
```bash
$ npm i
$ npm i nodemon -g 
```

**Run**
```bash
$ npm run start # classic start OR
$ npm run dev # with nodemon live update  
```
Runs the application with [nodemon]("https://nodemon.io/"). Server is listening on Port 3000 by default. This can be overwritten by `PORT` constant in `.env` file. 

## Support
Open a [new issue](https://github.com/rosoftdeveloper/appseed/issues/new) here. Live support on [Discord](https://discord.gg/fZC6hup) and [Facebook](https://www.facebook.com/groups/fullstack.apps.generator). 

## MIT License

Copyright (c) 2018 - present [AppSeed.us](https://www.appseed.us/?ref=github) 

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

---
Made with ♥ by [AppSeed.us]("https://appseed.us")
