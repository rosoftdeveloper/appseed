### Express Starter 
#### [AppSeed.us](https://www.appseed.us/?ref=github) - Full Stack web apps generator   


## Project Status: 

* Under development, incomplete documentation, active suport


## Setting up a development environment

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

## Running the app

* run `node index.js` or `nodemon start` if you installed nodemon previously.


## Trouble shooting

* In order to debug the application, you must provide a `--inspect` flag to node: `node --inspect index.js`.
* For more info on debugging, see: https://nodejs.org/en/docs/inspector


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
