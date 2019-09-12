# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
class Product(models.Model) :
	title 		= models.CharField(max_length=120) #max_length = required. 
	description = models.TextField(blank = True, null = True)
	price 		= models.DecimalField(max_digits = 1000 , decimal_places = 2)
	summary 	= models.TextField(default = 'this is cool')
