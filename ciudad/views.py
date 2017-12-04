#!/usr/bin/env python
# -*- coding: utf-8 -*-
from django.shortcuts import render_to_response, redirect,render
from ciudad.models import Ciudad, Indicador, Dato, Categoria
from django.template.context import RequestContext
from ciudad.utils import ultimosDatos
from django.db.models import FloatField
# Create your views here.

def index(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('pages/principal-horizontal4.php',{'ciudades':ciudades},context_instance=RequestContext(request))

def nosotros(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('pages/nosotros.php',{'ciudades':ciudades},context_instance=RequestContext(request))

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

def ciudades(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('pages/ciudades.php',{'ciudades':ciudades},context_instance=RequestContext(request))

def santiago(request):
	id_ciudad = request.GET.get('i',False)
	flag=False
	if id_ciudad:
		ciudad = Ciudad.objects.get(id=id_ciudad)  #Verificar si existe
		indicadores = Indicador.objects.all()
		datos = Dato.objects.filter(ciudad=ciudad).order_by('indicador')
		categorias = Categoria.objects.all()

		for indicador in indicadores:
			if indicador.limite_superior and indicador.limite_inferior_semi and indicador.limite_semi_superior and indicador.limite_inferior:
				indicador.limite_inferior_semi=indicador.limite_inferior_semi
				indicador.limite_semi_superior=indicador.limite_semi_superior
			else:
				indicador.limite_superior=0
		return render_to_response('pages/santiago.php',{'ciudad':ciudad,'indicadores':indicadores,'datos':datos,'categorias':categorias},context_instance=RequestContext(request))
	return index(request)

def categoria(request):
	indicadores = Indicador.objects.all()
	categorias = Categoria.objects.all()
	id_categoria = request.GET.get('i',False)
	busqueda = request.GET.get('busqueda',False)
	contador=0
	for categoria in categorias:
		for indicador in indicadores:
			if indicador.categoria == categoria:
				contador+=1
		categoria.total=contador
		contador=0

	if id_categoria:
		todos=False
		if busqueda:
			cat = Categoria.objects.get(id=id_categoria)
        		indicadores = Indicador.objects.filter(variable__icontains=busqueda)
        		return render_to_response('pages/categoria.php',{'categorias':categorias,'indicadores':indicadores,'cat':cat,'i':id_categoria,'aaa':'True'},context_instance=RequestContext(request))			
		else:
			cat = Categoria.objects.get(id=id_categoria)
        		indicadores = Indicador.objects.all()
        		return render_to_response('pages/categoria.php',{'categorias':categorias,'indicadores':indicadores,'cat':cat,'i':id_categoria,'aaa':'True'},context_instance=RequestContext(request))

	else:
		return render_to_response('pages/categoria.php',{'categorias':categorias,'indicadores':indicadores},context_instance=RequestContext(request))

def indicador(request):
	id_indicador = request.GET.get('i',False)
	datos = Dato.objects.filter(indicador=id_indicador)
	if id_indicador:
		indicador = Indicador.objects.get(id=id_indicador)
		categorias = Categoria.objects.all()
		indicadores = Indicador.objects.all()
	        return render_to_response('pages/indicador.php',{'categorias':categorias,'indicadores':indicadores,'ind':indicador,'datos':datos},context_instance=RequestContext(request))
	return index(request)

def indicadores(request):
	categorias= Categoria.objects.all()
	if request.method == 'GET' and 'busqueda' in request.GET:
		b=request.GET['busqueda']
		if b is not None and b != '':
			x=b
			x=x.replace('+',' ')
			capas=Categoria.objects.filter(nombre__icontains=x)
			return render(request,'pages/indicadores.php',{'categorias':capas})
			#return render('pages/indicadores.php',{'categorias':categorias},context_instance=RequestContext(request))
		else:
			return render_to_response('pages/indicadores.php',{'categorias':categorias},context_instance=RequestContext(request))
	else:
		return render_to_response('pages/indicadores.php',{'categorias':categorias},context_instance=RequestContext(request))

def comparar_ciudades(request):
	ci1 = request.GET.get('ci1',False)
	ci2 = request.GET.get('ci2',False)
	busqueda= request.GET.get('tokenfield',False)
	arr1=[]
	arr2=[]
	contador=1

	ciudades = Ciudad.objects.all()
	indicadores=Indicador.objects.all()
	arreglo="Todos,"
	arreglo2=""
	for indicador in indicadores:
		arreglo+=indicador.variable+","
		arreglo2+=indicador.variable+","
	arreglo=arreglo[:-1]
	arreglo2=arreglo2[:-1]

	if busqueda:
		search=busqueda.split(',')
	else:
		search=[]

	if ci1 and "Todos" not in search:
		ciudad1=Ciudad.objects.get(nombre=ci1)
		ciudad2=Ciudad.objects.get(nombre=ci2)
		for s in search:
			if contador == 1:
				indicador=Indicador.objects.get(variable=s)
			else:
				indicador=Indicador.objects.get(variable=s[1:])
			ss1=Dato.objects.filter(ciudad=ciudad1,indicador=indicador)
			ss2=Dato.objects.filter(ciudad=ciudad2,indicador=indicador)
			arr1.append(ss1)
			arr2.append(ss2)
			contador+=1

		zipped_list = zip(arr1, arr2)
		return render_to_response('pages/ciudad-comparar.php',{'ciudades':ciudades,'arreglo':arreglo,'ciudad1':ciudad1,'ciudad2':ciudad2,'search':busqueda,'zipped':zipped_list},context_instance=RequestContext(request))

	elif ci1 and "Todos" in search:
		ciudad1=Ciudad.objects.get(nombre=ci1)
		ciudad2=Ciudad.objects.get(nombre=ci2)
		for indicador in indicadores:
			ss1=Dato.objects.filter(ciudad=ciudad1,indicador=indicador)
			ss2=Dato.objects.filter(ciudad=ciudad2,indicador=indicador)
			arr1.append(ss1)
			arr2.append(ss2)
			contador+=1

		zipped_list = zip(arr1, arr2)
		return render_to_response('pages/ciudad-comparar.php',{'ciudades':ciudades,'arreglo':arreglo,'ciudad1':ciudad1,'ciudad2':ciudad2,'search':busqueda,'zipped':zipped_list},context_instance=RequestContext(request))


	else:
		return render_to_response('pages/ciudad-comparar.php',{'ciudades':ciudades,'arreglo':arreglo},context_instance=RequestContext(request))

def devuelve_indicadores_json(request):
	indicadores=Indicador.objects.all()
	arreglo="["
	for indicador in indicadores:
		arreglo+=indicador.variable+","
	arreglo=arreglo[:-1]
	arreglo+="]"

	return render_to_response('pages/devuelve_indicadores.php',{'indicadores':indicadores},context_instance=RequestContext(request))