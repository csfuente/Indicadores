#!/usr/bin/env python
# -*- coding: utf-8 -*-
from django.shortcuts import render_to_response, redirect
from ciudad.models import Ciudad, Indicador, Dato, Categoria
from django.template.context import RequestContext
from ciudad.utils import ultimosDatos
# Create your views here.

def index(request):
	return render_to_response('pages/principal-horizontal4.php',context_instance=RequestContext(request))

def ciudad(request):
	return render_to_response('pages/ciudad.php',context_instance=RequestContext(request))

def ciudad_indicador(request):
	return render_to_response('pages/ciudad-indicador.php',context_instance=RequestContext(request))

def ciudades(request):
	return render_to_response('pages/ciudades.php',context_instance=RequestContext(request))

def santiago(request):
	return render_to_response('pages/santiago.php',context_instance=RequestContext(request))

def categoria(request):
        return render_to_response('pages/categoria.php',context_instance=RequestContext(request))

def indicador(request):
        return render_to_response('pages/indicador.php',context_instance=RequestContext(request))

def indicadores(request):
        return render_to_response('pages/indicadores.php',context_instance=RequestContext(request))
