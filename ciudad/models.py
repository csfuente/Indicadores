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
	nombre = models.CharField(max_length=100)
	habitantes = models.IntegerField()
	region = models.CharField(max_length=10, choices=REGIONES)
	clima = models.CharField(max_length=100)
	url = models.CharField(max_length=100,default="")
	imagen = models.ImageField(null=True,blank=True)
	descripcion = models.CharField(max_length=600,default="")
	static_img = models.CharField(max_length=30,default="")
	ciudad_padre = models.ForeignKey('self',blank=True,null=True,default=None)
	activado = models.BooleanField(default=True)
        lat = models.CharField(max_length=25, default='', null=True)
        lon = models.CharField(max_length=25, default='', null=True)
        nombre_simple = models.CharField(max_length=120, default='',null=True)

	def __unicode__(self):
		return self.nombre

class Categoria(models.Model):
        nombre = models.CharField(max_length=100)
        icono = models.ImageField(null=True,blank=True)
        background = models.ImageField(null=True,blank=True)
	href = models.CharField(max_length=40, default="")
	def __unicode__(self):
		return self.nombre

class Indicador(models.Model):
	variable = models.CharField(max_length=100)
	descripcion = models.CharField(max_length=1500)
	unidad_medida = models.CharField(max_length=100,blank=True,null=True,default='')
	estado = models.CharField(max_length=10) #provisorio
	categoria = models.ForeignKey(Categoria)
	descripcion_corta=models.CharField(max_length=250,blank=True,null=True,default='')
	metodo=models.CharField(max_length=1500,blank=True,null=True,default='')
	icono = models.ImageField(null=True,blank=True)
        activado = models.BooleanField(default=True)
	def __unicode__(self):
		return self.categoria.nombre + ' - '  +self.variable

class Dato(models.Model):
	ciudad = models.ForeignKey(Ciudad)
	indicador = models.ForeignKey(Indicador)
	var_float = models.FloatField(null=True,blank=True)
	creado = models.DateTimeField(null=True,blank=True,editable=False)
	modificado = models.DateTimeField(null=True,editable=False)
	fecha_indicador = models.DateTimeField()
	def save(self, *args, **kwargs):
		if not self.id:
			self.created = timezone.now()
		self.modified = timezone.now()
		return super(Dato,self).save(*args, **kwargs)
	def __unicode__(self):
		return self.ciudad.nombre + ' - ' + self.indicador.variable + ' - ' + str(self.var_float or 'Sin Dato')

class Umbral(models.Model):
	TIPO = (
		('max','Valor maximo es el mejor'),
		('min','Valor minimo es el mejor'),
		('center','Valor central es el mejor'),
	)
	tipo = models.CharField(max_length=6, choices=TIPO)
	indicador = models.OneToOneField(Indicador)
	lim1 = models.FloatField()
	lim2 = models.FloatField()
	lim3 = models.FloatField()
	lim4 = models.FloatField(null=True, blank=True)

	def __unicode__(self):
		return self.tipo + ' - ' + self.indicador.variable
