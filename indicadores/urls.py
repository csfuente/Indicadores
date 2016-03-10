from django.conf.urls import patterns, include, url
from django.contrib import admin
from ciudad.views import index, detalle

admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'indicadores.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),
    url(r'^$', index),
    url(r'^(?P<ciudad>[0-9a-zA-Z]+)/$', detalle),
)
