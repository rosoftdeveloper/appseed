# all the imports necessary
from flask import json, url_for, redirect, render_template, flash, g, session, jsonify, request, send_from_directory
from werkzeug.exceptions import HTTPException, NotFound, abort

import os

from app  import app, mail

from flask       import url_for, redirect, render_template, flash, g, session, jsonify, request, send_from_directory
from flask_login import login_user, logout_user, current_user, login_required
from app         import app, lm, db, bc
from . models    import User
from . common    import COMMON, STATUS
from . assets    import *
 
import os, shutil, re, cgi
        
# provide login manager with load_user callback
@lm.user_loader
def load_user(user_id):
    return User.query.get(int(user_id))

# authenticate user
@app.route('/logout')
def logout():

    return 'logout (Not Implemented)'

# authenticate user
@app.route('/login', methods=['GET', 'POST'])
def login():
    
    return 'login (Not Implemented)'

# blog entry ..
@app.route('/', defaults={'path': None})
@app.route('/<path>')
def index(path):

    content = None

    # Home
    if path is None:

        path = 'index'

    try:
        return render_template('themes/argon-dashboard/skeleton.html',
                                content=render_template( 'themes/argon-dashboard/'+path+'.html') )
    except:
        abort(404)

#@app.route('/favicon.ico')
#def favicon():
#    return send_from_directory(os.path.join(app.root_path, 'static'),
#                               'favicon.ico', mimetype='image/vnd.microsoft.icon')

#@app.route('/sitemap.xml')
#def sitemap():
#    return send_from_directory(os.path.join(app.root_path, 'static'),
#                               'sitemap.xml')

#@app.route('/googlee35aa2f2fd798797985b.html')
#def google_checker():
#    return send_from_directory(os.path.join(app.root_path, 'static'),
#                               'googlee35aa2f2fd__YOUR_GOOGLE_HTML__.html')

# ------------------------------------------------------

# error handling
# most common error codes have been added for now
# TO DO:
# they could use some styling so they don't look so ugly

def http_err(err_code):
	
    err_msg = 'Oups !! Some internal error ocurred. Thanks to contact support.'
	
    if 400 == err_code:
        err_msg = "It seems like you are not allowed to access this link."

    elif 404 == err_code:    
        err_msg = "The URL you were looking for does not seem to exist."
    
    elif 500 == err_code:    
        err_msg = "Internal error. Contact the manager about this."

    else:
        err_msg = "Forbidden access."

    return err_msg
    
@app.errorhandler(401)
def e401(e):
    return http_err( 401) # "It seems like you are not allowed to access this link."

@app.errorhandler(404)
def e404(e):
    return http_err( 404) # "The URL you were looking for does not seem to exist.<br><br>
	                      # If you have typed the link manually, make sure you've spelled the link right."

@app.errorhandler(500)
def e500(e):
    return http_err( 500) # "Internal error. Contact the manager about this."

@app.errorhandler(403)
def e403(e):
    return http_err( 403 ) # "Forbidden access."

@app.errorhandler(410)
def e410(e):
    return http_err( 410) # "The content you were looking for has been deleted."

	