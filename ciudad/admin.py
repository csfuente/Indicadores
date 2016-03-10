#!/usr/bin/env python
# -*- coding: utf-8 -*-
from django.contrib import admin
from .models import *

admin.site.register(Ciudad)
admin.site.register(Categoria)
admin.site.register(Indicador)
admin.site.register(Dato)
# Register your models here.


