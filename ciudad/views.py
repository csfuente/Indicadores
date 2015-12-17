from django.shortcuts import render_to_response, redirect
from ciudad.models import Ciudad
# Create your views here.

def index(request):
	ciudades = Ciudad.objects.all()
	return render_to_response('index.html',{'ciudades':ciudades})

def detalle(request, ciudad=""):
	if ciudad == "":
		return redirect("/")
	uno = Ciudad.objects.get(nombre=ciudad)
	return render_to_response('detalle.html',{'ciudad':uno})
