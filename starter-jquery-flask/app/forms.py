# -*- encoding: utf-8 -*-
"""
Python Aplication Template
Licence: GPLv3
"""
from flask_wtf          import Form, RecaptchaField
from flask_wtf.file     import FileField, FileRequired
from wtforms            import StringField, TextAreaField, SubmitField, PasswordField
from wtforms.validators import InputRequired, Email, DataRequired

class BaseForm(Form):
	id          = StringField   (u'Id')
	title       = StringField   (u'Title'		  , validators=[DataRequired()] )
	info        = StringField   (u'Info'		  , validators=[DataRequired()] )
	slug        = StringField   (u'Slug'		  , validators=[DataRequired()] )
	tag1        = StringField   (u'Tag1'		  , validators=[DataRequired()] )
	tag2        = StringField   (u'Tag2'		  , validators=[DataRequired()] )
	tag3        = StringField   (u'Tag3'		  , validators=[DataRequired()] )

