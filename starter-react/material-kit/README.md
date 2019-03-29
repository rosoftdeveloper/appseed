
React / Redux Starter
====
**UI Kit:** Material Kit by Creative-Tim.com - [LIVE Demo](https://react.appseed.us) 

<p align="center">
  <img width="450" height="400" src="https://appseed.us/static/products/appctmktrtexx1x12/thumbnail-max.png">
</p>

### Requirements
- [Node.js](https://nodejs.org/) >= 6.x

### Setting up for development
* clone the project: `git clone git@github.com:rosoftdeveloper/appseed.git`
* change directory to this project: `cd appseed/starter-react/material-kit`
* (Optionally) start the backend server [starter-express](https://github.com/rosoftdeveloper/appseed/blob/master/starter-express/README.md) (default ip/port: `locahost:3000`)
* Default backend URL `http://127.0.0.1:3000`. This can be overwritten by updating the file: `src/views/LoginPage/LoginPage.jsx`

### Scripts
**Install Modules**
```bash
$ npm i
$ npm install -g serve # (optionally) 
```

**Run**
* **Linux/MacOs**: 
```npm run start```
* **Windows OS**: update the PORT, NODE_PATH in your environment, and after execute `start_win` target
```powershell
$env:PORT = "8080"
$env:NODE_PATH = "./src"
npm run start_win
```
* Visit [localhost:8080](http://localhost:8080) in your browser. The `default port 8080` can be overwritten by updating the `package.json`, `scripts \ start` attribute.

**Production Build**
* **Linux/MacOs**: 
`npm run build` - build the app in `build` directory
* **Windows OS**: 
`npm run build_win` - build the app in `build` directory

**Test the production build**
`serve -s build` - and visit [localhost:8080](http://localhost:8080) in your browser. You should see this [app](https://react.appseed.us) running. 

### Support
Open a [new issue](https://github.com/rosoftdeveloper/appseed/issues/new) here. Live support on [Discord](https://discord.gg/fZC6hup) and [Facebook](https://www.facebook.com/groups/fullstack.apps.generator). 

### MIT License

Copyright (c) 2018 - present [AppSeed.us](https://www.appseed.us/?ref=github) 

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

---
Made with ♥ by [AppSeed.us]("https://appseed.us")
