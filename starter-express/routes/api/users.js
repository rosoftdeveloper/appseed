/**
 *
 * Author:  AppSeed.us - Full Stack App Generator
 *
 * License: MIT - Copyright (c) AppSeed.us
 * @link https://github.com/rosoftdeveloper/appseed
 *
 */

const passport    = require('passport');
const router      = require('express').Router();
const auth        = require('../auth');
const generateJWT = require('../../utils/generateJWT');

/* POST login route */
router.post('/login', auth.optional, (req, res, next) => {
    const { body: { user } } = req;
        
    if(!user.email) {
        return res.status(422).json({
            errors: {
                email: 'is required',
            },
        });
    }

    if(!user.password) {
        return res.status(422).json({
            errors: {
                password: 'is required',
            },
        });
    }

    return passport.authenticate('local', { session: false }, (err, passportUser, info) => {
        if(err) {
            return next(err);
        }

        if(passportUser) {
            const user = {
                _id: passportUser.id,
                email: passportUser.email,
                name: passportUser.name,
                surname: passportUser.surname,
                token: generateJWT(passportUser)
            };

            return res.json({ user });
        }
        
        return res.status(400).send(info);
    })(req, res, next);
});


module.exports = router;