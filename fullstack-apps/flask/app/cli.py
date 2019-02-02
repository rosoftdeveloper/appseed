from models import User
from app import app, lm, db, bc
from common import *
from sqlalchemy import desc,or_
from models import User

import      datetime,time,os,re

def create_user( email, name, username, password):

    # regex to check for e-mail syntax
    if not re.match("(^.+@{1}.+\.{1}.+)", str(email)):
        
        print "Invalid e-mail. Please try again."
        return None
        #return "Invalid e-mail. Please try again."

    # hash the password here (bcrypt has salting included)
    pw_hash = bc.generate_password_hash(password)

    # if form is valid and all verification is complete
    # create User object and give the parameters in order
    user = User(username, pw_hash, name, email)

    user.save()

    print "user created ok: " + str( user.id ) 
    return user 

# @ToDo - to be moved in a test file
def t_create_users():
    create_user( 'chirilovadrian@gmail.com'    , 'adi'   , 'adi'  , 'pass') 
    
def create_users_prod():
    create_user( 'chirilovadrian@gmail.com'    , 'adi'   , 'adi'  , '8987__hddt__hGT') 
               