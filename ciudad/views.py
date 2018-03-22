#!/usr/bin/env python
# -*- coding: utf-8 -*-
from django.shortcuts import render_to_response, redirect,render
from ciudad.models import Ciudad, Indicador, Dato, Categoria
from django.template.context import RequestContext
from ciudad.utils import ultimosDatos
from django.db.models import FloatField
# Create your views here.

# Pagina principal con mapa de fondo "/"
def index(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('index.html',{'ciudades':ciudades},context_instance=RequestContext(request))

def nosotros(request):
	return render_to_response('nosotros.html',context_instance=RequestContext(request))

def ciudad_indicador(request):
	id_ciudad = request.GET.get('c',False)
	id_indicador = request.GET.get('i',False)
	if id_ciudad and id_indicador:
		ciudad = Ciudad.objects.get(id=id_ciudad)
		indicador = Indicador.objects.get(id=id_indicador)
		datos=Dato.objects.filter(ciudad=ciudad,indicador=indicador)
		indicadores = Indicador.objects.all()
		categorias = Categoria.objects.all()
		return render_to_response('pages/ciudad-indicador.php',{'ciudad':ciudad,'indicador':indicador,'indicadores':indicadores,'categorias':categorias,'datos':datos},context_instance=RequestContext(request))
	return index(request)

# Pagina con la lista de ciudades desplayadas con una imagen "/ciudades"
def ciudades(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('ciudades.html',{'ciudades':ciudades},context_instance=RequestContext(request))

# Pagina con los cados de una ciudad en especifica "/ciudad/<url>"
def santiago(request,url):
	if len(Ciudad.objects.filter(url=url))>0:
		ciudad = Ciudad.objects.get(url=url)
		indicadores = Indicador.objects.all()
		categorias = Categoria.objects.all()
		datos = Dato.objects.filter(ciudad=ciudad)
		retorno = {
                    'ciudad':ciudad,
                    'indicadores':indicadores,
                    'categorias': categorias,
                    'datos': datos,
                    }
		return render_to_response('ciudad.html',retorno,context_instance=RequestContext(request))
	else:
		return redirect('/ciudades')

# Pagina que muestra todos los indicadores "/indicadores"
def indicadores(request):
	indicadores = Indicador.objects.all()
	categorias = Categoria.objects.all()
	return render_to_response('indicadores.html',{'indicadores':indicadores,'categorias':categorias},context_instance=RequestContext(request))

def comparar_ciudades(request):
	ciudades = Ciudad.objects.all()
	indicadores = Indicador.objects.all()
	categorias = Categoria.objects.all()
	datos = Dato.objects.all()
	retorno = {
		'ciudades':ciudades,
		'indicadores':indicadores,
		'categorias': categorias,
		'datos': datos,
		}

	return render_to_response('comparador.html',retorno,context_instance=RequestContext(request))
