#!/usr/bin/env python
# -*- coding: utf-8 -*-

from models import *

def ultimosDatos(ciudad):
        ind = Dato.objects.filter(ciudad=ciudad)
        indR = []
        boolean = True
        for i in ind:
                boolean = True
                for i2 in indR:
                        if(i.indicador == i2.indicador and i.fecha_indicador < i2.fecha_indicador):
                                boolean = False
                if(boolean):
                        indR.append(i)
        return indR
