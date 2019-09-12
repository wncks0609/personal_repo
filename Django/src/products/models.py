# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
class Product(models.Model) :
	title 		= models.TextField() 
	description = models.TextField()
	price 		= models.TextField()
	summary 	= models.TextField(default = 'this is cool')
