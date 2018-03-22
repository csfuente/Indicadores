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

# Definicion de CEDEUS "/nosotros"
def nosotros(request):
	return render_to_response('nosotros.html',context_instance=RequestContext(request))

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

# Compara indicadores entre dos ciudades "/comparar_ciudades"
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
		'mostrar': False
		}
	if request.method == 'POST':
		if not (request.POST['ciudad1'] == '' or request.POST['ciudad2'] == ''):
			retorno['ciudad1'] = request.POST['ciudad1']
			retorno['ciudad2'] = request.POST['ciudad2']
			ciudad1 = Ciudad.objects.get(nombre=retorno['ciudad1'])
			ciudad2 = Ciudad.objects.get(nombre=retorno['ciudad2'])
			print ciudad1
			print ciudad2

			ind_a_considerar = request.POST.getlist('indicadores')
			ind_resultantes = []
			if ind_a_considerar == []:
				considerados = indicadores
			else:
				considerados = []
				for i in ind_a_considerar:
					considerados.append(Indicador.objects.get(variable=i))
			for i in considerados:
				try:
					dato1 = Dato.objects.get(ciudad=ciudad1.id,indicador=i.id).var_float
				except:
					dato1 = ''
				try:
					dato2 = Dato.objects.get(ciudad=ciudad2.id,indicador=i.id).var_float
				except:
					dato2 = ''
				ind_resultantes.append([i.variable,dato1,dato2])

			retorno['mostrar'] = True
			retorno['indicadores_r'] = ind_resultantes

	return render_to_response('comparador.html',retorno,context_instance=RequestContext(request))
