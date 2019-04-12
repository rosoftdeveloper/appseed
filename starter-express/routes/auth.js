/**
 *
 * Author:  AppSeed.us - Full Stack App Generator
 *
 * License: MIT - Copyright (c) AppSeed.us
 * @link https://github.com/rosoftdeveloper/appseed
 *
 */

const jwt = require('express-jwt');

const getTokenFromHeaders = (req) => {
	const { headers: { authorization } } = req;

	if(authorization && authorization.split(' ')[0] === 'Token') {
		return authorization.split(' ')[1];
	}
    
	return null;
};

const auth = {
	required: jwt({
		secret: process.env.JWT_SECRET,
		userProperty: 'payload',
		getToken: getTokenFromHeaders,
	}),
	optional: jwt({
		secret: process.env.JWT_SECRET,
		userProperty: 'payload',
		getToken: getTokenFromHeaders,
		credentialsRequired: false,
	}),
};

module.exports = auth;