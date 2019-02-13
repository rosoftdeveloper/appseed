### Backend - Architecture and Design 
#### [AppSeed.us](https://www.appseed.us/?ref=github) - Full Stack web apps generator   


## General: 

* All backend use a hardcoded list of (two) users:
  Sample used by [Express Backend](https://github.com/rosoftdeveloper/appseed/blob/master/starter-express/config/users.js)  

## Input: 

* Header:
Content-Type: application/json

* Body:
{
	"user": {
		"email": "demo@appseed.us",
		"password": "demo"
	}
}

## Output: 

* Nominal case:

{
    "user": {
        "_id": 1,
        "email": "demo@appseed.us",
        "name": "John",
        "surname": "Doe",
        "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiZW1haWwiOiJkZW1vQGFwcHNlZWQudXMiLCJuYW1lIjoiSm9obiIsInN1cm5hbWUiOiJEb2UiLCJleHAiOjE1NTUxODY1NTEsImlhdCI6MTU1MDAwNjE1MX0.Adu5GOqf2Sx1CrAhNgId_KTZL_xxj3fBgRKTe41K-YA"
    }
}

* Error Case

{
    "errors": {
        "password": "Password is invalid"
    }
}

## Trouble shooting

* To be updated

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
