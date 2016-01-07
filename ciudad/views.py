from django.shortcuts import render_to_response, redirect
from ciudad.models import Ciudad, Indicador
from django.template.context import RequestContext
# Create your views here.

def index(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('mapa.php',{'ciudades':ciudades},context_instance=RequestContext(request))

def detalle(request, ciudad=""):
	if ciudad == "":
		return redirect("/")
	uno = Ciudad.objects.get(nombre=ciudad)
	indicadores = Indicador.objects.filter(ciudad=uno).order_by('categoria')
	return render_to_response('info.php',{'ciudad':uno,'indicadores':indicadores},context_instance=RequestContext(request))
