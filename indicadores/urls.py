#!/usr/bin/env python
# -*- coding: utf-8 -*-

from django.conf.urls import patterns, include, url
from django.contrib import admin
from ciudad.views import index, nosotros,comparar_ciudades, ciudades, santiago,indicadores
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.conf.urls.static import static
import settings

admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'indicadores.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),
    url(r'^$', index),
    url(r'^ciudad/(?P<url>\w{0,50})$', santiago),
    url(r'^ciudades/$',ciudades),
    url(r'^nosotros/$',nosotros),
    url(r'^comparar_ciudades/$',comparar_ciudades),
    url(r'^indicadores/$',indicadores),
)

urlpatterns += staticfiles_urlpatterns()
urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
