
Express Jwt
====
Basic setup of express with JWT authentication (passport, passport-jwt), ES6.




## Requirements
- [Node.js]("https://nodejs.org/") >= 6.x

## Authentication
Authentication is based on [json web tokens]("https://jwt.io"). `passport-jwt` strategy is used to handle the email / password authentication.
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

### Signup: `/api/signup`
```
WIP - to be updated soon
```

## Setting up for development
* clone repo: `git clone git@github.com:rosoftdeveloper/appseed.git` 
* change directory to starter-express: `cd appseed/starter-express`
* install node modules: `npm i`
* create a file named .env which should contain the following default setup ( you should provide your own values to this variables ):
```
SALT=35kj7waj3k5kja09jeoi21kn0pg13iuhlkn // used in password hashing
JWT_SECRET=secret                        // used in JWT signing
SESSION_SECRET=secret                    // used for session data
PORT=8080      // the port on which your server will be available on
SERVER_ADDRESS=127.0.0.1 // or 0.0.0.0 for all or other interface address you want to listen
```
You have to remove the comments from the end of each row.
Real life example .env file:
```
SALT=35kj7waj3k5kja09jeoi21kn0pg13iuhlkn
JWT_SECRET=secret
SESSION_SECRET=secret
PORT=8080
SERVER_ADDRESS=127.0.0.1
```
* [optional] You can install nodemon: `npm i nodemon -g` in order watch & auto restart the server on file change.

## Scripts
**Install Modules**
```bash
$ npm i
$ npm i nodemon -g 
```

**Run**
```bash
$ nodemon start 
```
Runs the application with [nodemon]("https://nodemon.io/"). Server is listening on Port 3000 by default. This can be overwritten by `PORT` constant in `.env` file. 

## Trouble shooting
Support via @Github and Live help on [Discord]("https://discord.gg/fZC6hup")


## License

Copyright (c) 2018 - present [AppSeed.us](https://www.appseed.us/?ref=github) 

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

---
Made with ♥ by [AppSeed.us]("https://appseed.us")
