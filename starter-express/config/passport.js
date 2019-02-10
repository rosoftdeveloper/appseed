const passport = require('passport');
const LocalStrategy = require('passport-local');
const validatePassword = require('../utils/validatePassword');
const dummyUser = require('../utils/dummyUser');

passport.use(new LocalStrategy({
    usernameField: 'user[email]',
    passwordField: 'user[password]',
}, (email, password, done) => {
    /** 
    * Here we introduce the logic in order to query 
    * for the user and check for it's credentials
    * THIS IS TEMPORARY AND NEEDS TO BE REPLACED WITH AN ACTUAL QUERY IN THE CHOSEN DB
    */

    if ( email !== dummyUser.email ) {
        return done(null, false, { errors: { 'email or user': `doesn't exist`}})
    } 

    if ( !validatePassword(password, dummyUser.password) ) {
        return done(null, false, { errors: { 'password': `is invalid`}})
    }

    return done(null, dummyUser);
}));