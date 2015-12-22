#!/usr/local/bin/python
# -*- coding: utf-8 -*-

from django.db import models
from django.utils import timezone


class Ciudad(models.Model):
	REGIONES = (
		('I','Tarapaca'),
		('II','Antofagasta'),
		('III','Atacama'),
		('IV','Coquimbo'),
		('V','Valparaiso'),
		('VI',"O Higgins"),
		('VII','Maule'),
		('VIII','Bio-Bio'),
		('IX','La Araucania'),
		('X','Los Lagos'),
		('XI','Aysen'),
		('XII','Magallanes'),
		('RM','Metropolitana'),
		('XIV','Los Rios'),
		('XV','Arica y parinacota'),
	)
	nombre = models.CharField(max_length=20)
	habitantes = models.IntegerField()
	region = models.CharField(max_length=10, choices=REGIONES)
	clima = models.CharField(max_length=20)
	def __str__(self):
		return self.nombre

class Categoria(models.Model):
        nombre = models.CharField(max_length=50)
	def __str__(self):
		return self.nombre

class Indicador(models.Model):
	TIPO = (
		('char','caracter'),
		('int','numero entero'),
		('float','numero con pocos decimales'),
	)
	variable = models.CharField(max_length=50)
	descripcion = models.CharField(max_length=300)
	estado = models.CharField(max_length=10) #provisorio
	categoria = models.ForeignKey(Categoria)
	var_int = models.IntegerField(null=True,blank=True)
	var_char = models.CharField(max_length=10,null=True,blank=True)
	var_float = models.FloatField(null=True,blank=True)
	creado = models.DateTimeField(null=True,blank=True,editable=False)
	modificado = models.DateTimeField(null=True,editable=False)
	fecha_indicador = models.DateTimeField()
	tipo_variable = models.CharField(max_length=6,choices=TIPO)
	ciudad = models.ForeignKey(Ciudad, default=1)
	def save(self, *args, **kwargs):
		if not self.id:
			self.created = timezone.now()
		self.modified = timezone.now()
		return super(Indicador,self).save(*args, **kwargs)
	def __str__(self):
		return self.variable
