from flask import Flask, jsonify, request
from flask_cors import CORS
from flask_jwt_simple import (
    JWTManager, jwt_required, create_jwt, get_jwt_identity
)
'''
const user1 = {
    id        : 1,
    name      : 'John',
    surname   : 'Doe',
    email     : 'demo@appseed.us',
    password  : 'demo'
};

const user2 = {
    id        : 2,
    name      : 'George',
    surname   : 'Clooney',
    email     : 'demo2@appseed.us',
    password  : 'demo'
};
'''

user1 = { 'id': 1, 'name' : 'John'  , 'surname' : 'Doe'     , 'email' : 'demo@appseed.us'   , 'password' : 'demo'  }
user2 = { 'id': 2, 'name' : 'George', 'surname' : 'Clooney' , 'email' : 'demo2@appseed.us'  , 'password' : 'demo'  }

Users = {
    'demo@appseed.us'  : user1,
    'demo2@appseed.us' : user2,
}

app = Flask(__name__)
CORS(app)

# Setup the Flask-JWT-Simple extension
app.config['JWT_SECRET_KEY'] = 'super-secret'  # Change this!
jwt = JWTManager(app)

# Provide a method to create access tokens. The create_jwt()
# function is used to actually generate the token
@app.route('/api/users/login', methods=['POST', 'OPTIONS'])
def login():

    #username = 'demo@appseed.us'
    #password = 'demo'

    #user = {'_id': 1, "email": 'demo@appseed.us', 'name' : "John", 'surname' : "Doe", "token" : create_jwt(identity=username) } 
    #ret  = {'user': user }

    #return jsonify(ret), 200

    ###########################################################
    #if not request.is_json:
    #    return jsonify({'errors': {'general' : 'format error (expected JSON)' }}), 400

    username = None
    password = None

    try:
        params = request.get_json()

        username = params['user']['email']
        password = params['user']['password']
    
    # catch JSON format and missing keys (email / password)
    except:
        return jsonify({'errors': {'general' : 'Format error ' }}), 400

    if not username in Users:
        return jsonify({'errors': {'email' : 'User or email doesn\'t exist' }}), 400

    user = Users[ username ] # aka email

    if not password or password != user['password'] :
        return jsonify({'errors': {'password' : 'Password is invalid' }}), 400 

    # inject token
    user["token"] = create_jwt(identity=username)
    
    # build response
    ret  = { 'user': user }

    # All good, return response
    return jsonify(ret), 200

# Protect a view with jwt_required, which requires a valid jwt
# to be present in the headers.
@app.route('/protected', methods=['GET'])
@jwt_required
def protected():
    # Access the identity of the current user with get_jwt_identity
    return jsonify({'hello_from': get_jwt_identity()}), 200

if __name__ == '__main__':
	app.run(host='0.0.0.0', debug=True)
