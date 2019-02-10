# -*- encoding: utf-8 -*-
"""
Python Aplication Template
Licence: GPLv3
"""
import os.path

# Only cfg is here .. 
class AppConfig(object):

	THEME   = 'argon-dashboard'

	STATIC  	 = 'static'
	DATE_FORMAT  = '%Y-%m-%d'
	SECRET_KEY   = "_9^MHFrYHBD_%$fVGhaXsa_!@#" # save yours here

class Config(AppConfig):
	"""
	Configuration base, for all environments.
	"""
	DEBUG                 			= False
	TESTING               			= False
	BOOTSTRAP_FONTAWESOME 			= True
	CSRF_ENABLED          			= True

	SQLALCHEMY_TRACK_MODIFICATIONS 	= False

class ProductionConfig(Config):

	APP = '/home/developer/www_root/appseed/app'
	APP_IMG_FOLDER = os.path.join( APP, 'static', 'images' )

	# RECAPTCHA keys (production)
	RECAPTCHA_PUBLIC_KEY  = "1234_abcd"
	RECAPTCHA_PRIVATE_KEY = "1234_xyzw"

	SQLALCHEMY_DATABASE_URI = "mysql+pymysql://db_user:db_pass@localhost/db_name"

	SERVER_NAME   = 'www.yourdomain.us'
	DEBUG         = False
	TESTING       = False

class DevelopmentConfig(Config):

	APP = 'app'
	APP_IMG_FOLDER = os.path.join( APP, 'static', 'images' )

	# keys for dev [ http://localhost ]
	RECAPTCHA_PUBLIC_KEY  = "6LfYUS0UAAAAAFauOZdHOopKaIfSL5yflSmqIc13"
	RECAPTCHA_PRIVATE_KEY = "6LfYUS0UAAAAADGwMiiRGxVGt1UEE-GJhgyT9_hs"

	SQLALCHEMY_DATABASE_URI = "mysql+pymysql://appseedusr_7576:443_95745s_aSwaQQ__@localhost/appseed_flask"

	SERVER_NAME   = 'localhost:5000'
	DEBUG	= False
	TESTING	= False
	FORCE_HTTPS = False


