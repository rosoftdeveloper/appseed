# -*- encoding: utf-8 -*-
"""
Python Aplication Template
Licence: GPLv3
"""

import os
from app import app
from app import db

#----------------------------------------
# launch
#----------------------------------------

if __name__ == "__main__":
	db.create_all()

	port = int(os.environ.get("PORT", 5000))
	app.run(host='0.0.0.0', port=port, debug=True)
	#app.run(ssl_context='adhoc')

    