#!/usr/local/bin/python
# -*- coding: utf-8 -*-

from django.db import models

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
