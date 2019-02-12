/**
 *
 * Author:  AppSeed.us - Full Stack App Generator
 *
 * License: MIT - Copyright (c) AppSeed.us
 * @link https://github.com/rosoftdeveloper/appseed
 *
 */

const passport         = require('passport');
const LocalStrategy    = require('passport-local');
const validatePassword = require('../utils/validatePassword');
const Users            = require('../config/users');

passport.use(new LocalStrategy({
    usernameField: 'user[email]',
    passwordField: 'user[password]',
}, (email, password, done) => {

    /** 
    * Here we introduce the logic in order to query 
    * for the user and check for it's credentials
    * THIS IS TEMPORARY AND NEEDS TO BE REPLACED WITH AN ACTUAL QUERY IN THE CHOSEN DB
    */

    // Check user is registerred 
    if ( ! ( email in Users ) ) {

        return done(null, false, { errors: { 'email': `User or email doesn't exist`}})
    }
    
    // Recover the user
    var user = Users[ email ] 

    // Validate password
    if ( !validatePassword(password, user.password) ) {
        return done(null, false, { errors: { 'password': `Password is invalid`}})
    }

    return done(null, user);
}));