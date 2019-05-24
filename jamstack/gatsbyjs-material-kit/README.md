# Gatsby Starter - Material Kit

> A Quick Way to bootstrap your next Gatsby app. Provided by [AppSeed.us](https://appseed.us?ref=github) 

![ss](https://static.appseed.us/misc/starter-gatsby-material-kit.png)

## Demo 💯

- [Demo Link](https://starter-gatsbyjs-material-kit.appseed.us/)

## Features 🚀

This is a simplified Gatsby app based on Material-Kit design (by Creative-Tim)

## How to use it? 👨‍💻

You need npm and Gatsby CLI installed on your development machine.

### Clone the repository/Installation

If you have Git installed on your system you can run the following command:

`git clone https://github.com/rosoftdeveloper/starter-gatsbyjs-material-kit`

Otherwise you can directly download it clicking on download button on this repository.

### Running in development mode

Go inside `starter-gatsbyjs-material-kit/` directory and run the following command:

- `npm install` to install modules or `yarn` (recommended)
- `gatsby develop` to start the development (live browser update)
- `gatsby build` generate the deplyment in `public` directory
- `npm run deploy` deploy your app via FTP `EDIT deploy.js (config section)`

### Open the source code and start editing!

The site is now running at
[http://localhost:8000](http://localhost:8000).

Open `starter-gatsbyjs-material-kit/` directory in your code editor of choice and edit it. 
Save your changes and the changes will be reflected in the browser without manual refresh!

### Configure FTP deployment 

Edit `deploy.js` file:

```js
var config = {
    user: "YOUR_USER_HERE",                   // NOTE that this was username in 1.x 
    password: "YOUR_PASS_HERE",           // optional, prompted if none given
    host: "YOUR_FTP_SERVER_HERE",
    port: 21,
    localRoot: __dirname + '/public',
    remoteRoot: '/',
    include: ['*', '**/*'],      // this would upload everything except dot files
    //include: ['*.php', 'dist/*'],
    exclude: ['dist/**/*.map'],     // e.g. exclude sourcemaps - ** exclude: [] if nothing to exclude **
    deleteRemote: false,              // delete ALL existing files at destination before uploading, if true
    forcePasv: false                 // Passive mode is forced (EPSV command is not sent)
}
```

## Need More starters?
- Gatsby Emma (Html5 Up): [Demo](https://starter-gatsbyjs-emma.appseed.us/), [Sources](https://github.com/rosoftdeveloper/starter-gatsbyjs-emma)
- Gatsby Dimension (Html5 Up): [Demo](https://starter-gatsbyjs-dimension.appseed.us/), [Sources](https://github.com/rosoftdeveloper/starter-gatsbyjs-dimension)
- Gatsby Strata (Html5 Up): [Demo](https://starter-gatsbyjs-strata.appseed.us/), [Sources](https://github.com/rosoftdeveloper/starter-gatsbyjs-strata)
- Gatsby Jodie (Html5 Up): [Demo](https://starter-gatsbyjs-jodie.appseed.us/), [Sources](https://github.com/rosoftdeveloper/starter-gatsbyjs-jodie)

## Support
Live support on [Discord](https://discord.gg/fZC6hup) and [Facebook](https://www.facebook.com/groups/fullstack.apps.generator). 

---
Made with ♥ by [AppSeed.us]("https://appseed.us")
