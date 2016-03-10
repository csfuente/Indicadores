#!/usr/bin/env python
# -*- coding: utf-8 -*-
from django.shortcuts import render_to_response, redirect
from ciudad.models import Ciudad, Indicador, Dato, Categoria
from django.template.context import RequestContext
from ciudad.utils import ultimosDatos
# Create your views here.

def index(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('mapa.php',{'ciudades':ciudades},context_instance=RequestContext(request))

def detalle(request, ciudad=""):
	if ciudad == "":
		return redirect("/")
	uno = Ciudad.objects.get(url=ciudad)
	cat = Categoria.objects.all()
	ind = Indicador.objects.all()
	datos = ultimosDatos(uno)
	return render_to_response('info.php',{'ciudad':uno,'datos':datos,'indicadores':ind,'categorias':cat},context_instance=RequestContext(request))

