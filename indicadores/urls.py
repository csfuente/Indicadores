#!/usr/bin/env python
# -*- coding: utf-8 -*-

from django.conf.urls import patterns, include, url
from django.contrib import admin
from ciudad.views import index, detalle
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
    url(r'^(?P<ciudad>[0-9a-zA-Z_]+)/$', detalle),
)

urlpatterns += staticfiles_urlpatterns()
urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
