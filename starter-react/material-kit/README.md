[Material Kit - Coded in React](https://appseed.us/apps/react/express/material-kit-creative-tim)
====
Design by Creative-Tim.com. Coded by AppSeed.us - [LIVE Demo](https://react-express-material-kit.appseed.us/) 


![Material Kit - Coded in React and Express](https://appseed.us/static/thumbnails/react-express-material-kit-creative-tim-top-image.png)

## Requirements
- [Node.js](https://nodejs.org/) >= 6.x

## Setting up for development
* clone the project: `git clone git@github.com:rosoftdeveloper/appseed.git`
* change directory to this project: `cd appseed/starter-react/material-kit`
* (Optionally) start the backend server [starter-express](https://github.com/rosoftdeveloper/appseed/blob/master/starter-express/README.md) (default ip/port: `locahost:3000`)
* Default backend URL `http://127.0.0.1:3000`. This can be overwritten by updating the file: `src/views/LoginPage/LoginPage.jsx`

## Scripts
**Install Dependencies**
```bash
$ yarn 
```

**Start app for development**
* **Linux/MacOs**: 
```yarn start```
* **Windows OS**: update the PORT, NODE_PATH in your environment, and after execute `start_win` target
```powershell
$env:PORT = "8080"
$env:NODE_PATH = "./src"
npm run start_win
```
* Visit [localhost:8080](http://localhost:8080) in your browser. The `default port 8080` can be overwritten by updating the `package.json`, `scripts \ start` attribute.

**Production Build**
* **Linux/MacOs**: 
`yarn build` - build the app in `build` directory
* **Windows OS**: 
`yarn build_win` - build the app in `build` directory

## Support
Open a [new issue](https://github.com/rosoftdeveloper/appseed/issues/new) here. Live support on [Discord](https://discord.gg/fZC6hup) and [Facebook](https://www.facebook.com/groups/fullstack.apps.generator). 

## MIT License
Copyright (c) 2018 - present [AppSeed.us](https://www.appseed.us/?ref=github) 

---
Made with ♥ by [AppSeed.us]("https://appseed.us")
