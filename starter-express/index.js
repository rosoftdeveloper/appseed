/**
 *
 * Author:  AppSeed.us - Full Stack App Generator
 *
 * License: MIT - Copyright (c) AppSeed.us
 * @link https://github.com/rosoftdeveloper/appseed
 *
 */

const express    = require("express");
const path       = require("path");
const bodyParser = require("body-parser");
const session    = require("express-session");
const cors       = require("cors");

/* Make all variables from our .env file available in our process */
require('dotenv').config()

/* Init express */
const app = express();

/* Here we setup the middlewares & configs */

app.use(cors());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(session({ secret: process.env.SESSION_SECRET, cookie: { maxAge: 60000 }, resave: false, saveUninitialized: false }));
require('./config/passport');

/* Here we define the api routes */
app.use(require('./routes'));

const port = process.env.PORT || 8080;

app.listen(port, () => console.log(`Server running on http://localhost:${port}`));
