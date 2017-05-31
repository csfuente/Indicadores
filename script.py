from ciudad.models import Indicador
import random

uno = Indicador.objects.get(id=5)
dos = Indicador.objects.get(id=6)
tre = Indicador.objects.get(id=7)

choices = [uno,dos,tre]

todos = Indicador.objects.all()

for un in todos:
  un.icono = choices[random.choice([0,1,2])].icono
  un.variable = un.variable.strip('"')
  un.save()
