const crypto = require('crypto');

/**
 * Validates that the provided password matches the hashed counterpart
 * 
 * @since 1.0.0
 * @category validation
 * @param {String} password The password provided by the user
 * @param {String} hashedPassword The password stored in your db
 * @returns {Boolean} the 
 */

const validatePassword = (password, hashedPassword) => {
    const hash = crypto.pbkdf2Sync(password, process.env.SALT, 10000, 512, 'sha512').toString('hex');
    return hash === hashedPassword;
}

module.exports = validatePassword;