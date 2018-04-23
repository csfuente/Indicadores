#!/usr/bin/env python
# -*- coding: utf-8 -*-
from django.shortcuts import render_to_response, redirect,render
from ciudad.models import Ciudad, Indicador, Dato, Categoria, Umbral
from django.template.context import RequestContext
from ciudad.utils import ultimosDatos
from django.db.models import FloatField

# Pagina principal con mapa de fondo "/"
def index(request):
	ciudades = Ciudad.objects.filter(activado=True)
	return render_to_response('index.html',{'ciudades':ciudades})

# Definicion de CEDEUS "/nosotros"
def nosotros(request):
	return render_to_response('nosotros.html')

# Pagina con la lista de ciudades desplayadas con una imagen "/ciudades"
def ciudades(request):
	ciudades = Ciudad.objects.filter(activado=True)
	return render_to_response('ciudades.html',{'ciudades':ciudades})

# Pagina con los cados de una ciudad en especifica "/ciudad/<url>"
def santiago(request,url):
	if len(Ciudad.objects.filter(url=url))>0:
		ciudad = Ciudad.objects.get(url=url)
		indicadores = Indicador.objects.filter(activado=True)
		categorias = Categoria.objects.all()
		datos = []
		for ind in indicadores:
			datos.append(Dato.objects.filter(ciudad=ciudad,indicador=ind).last())
		umbrales = Umbral.objects.filter(indicador__in=indicadores)
		umb = dict()
		for indicador in indicadores:
			umb[indicador.variable] = {'result':0,'umbral':[]}
		for umbral in umbrales:
			umb[umbral.indicador.variable] = resultado_umbral(umbral, datos)
		retorno = {
                    'ciudad':ciudad,
                    'indicadores':indicadores,
                    'categorias': categorias,
                    'datos': datos,
		    'umbrales': umb,
                    }
		return render_to_response('ciudad.html',retorno)
	else:
		return redirect('/ciudades')

def resultado_umbral(umbral, datos):
	for dato in datos:
		if dato.indicador == umbral.indicador:
			if umbral.tipo == 'max':
				if dato.var_float < umbral.lim1:
					return {'result':0,'umbral':umbral}
				elif dato.var_float < umbral.lim2:
					return {'result':1,'umbral':umbral}
				elif dato.var_float < umbral.lim3:
					return {'result':2,'umbral':umbral}
				else:
					return {'result':3,'umbral':umbral}
			elif umbral.tipo == 'min':
                                if dato.var_float < umbral.lim1:
                                        return {'result':3,'umbral':umbral}
                                elif dato.var_float < umbral.lim2:
                                        return {'result':2,'umbral':umbral}
                                elif dato.var_float < umbral.lim3:
                                        return {'result':1,'umbral':umbral}
                                else:
                                        return {'result':0,'umbral':umbral}
			elif umbral.tipo == 'center':
				if dato.var_float < umbral.lim1 or dato.var_float > umbral.lim4:
					return {'result':1,'umbral':umbral}
				elif dato.var_float < umbral.lim2 or dato.var_float > umbral.lim3:
					return {'result':2,'umbral':umbral}
				else:
					return {'result':3,'umbral':umbral}
	return {'result':0,'umbral':[]}

# Pagina que muestra todos los indicadores "/indicadores"
def indicadores(request):
	indicadores = Indicador.objects.filter(activado=True)
	categorias = Categoria.objects.all()
	return render_to_response('indicadores.html',{'indicadores':indicadores,'categorias':categorias})

# Compara indicadores entre dos ciudades "/comparar_ciudades"
def comparar_ciudades(request):
	ciudades = Ciudad.objects.filter(activado=True)
	indicadores = Indicador.objects.filter(activado=True)
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
					dato1 = Dato.objects.filter(ciudad=ciudad1.id,indicador=i.id).last().var_float
				except:
					dato1 = ''
				try:
					dato2 = Dato.objects.filter(ciudad=ciudad2.id,indicador=i.id).last().var_float
				except:
					dato2 = ''
				ind_resultantes.append([i.variable,dato1,dato2])

			retorno['mostrar'] = True
			retorno['indicadores_r'] = ind_resultantes

	return render(request,'comparador.html',retorno)
