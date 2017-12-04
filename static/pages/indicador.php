<!DOCTYPE html>
<html>
<head>
    
    <title>{{ind.variable}}</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% load static %}
    <link href="{% static 'css/ciudad.css' %}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{% static 'favicon.ico' %}"/>
     <!-- Bootstrap Core CSS -->
    <link href="{% static 'css/bootstrap.min.css' %}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{% static 'css/metisMenu.min.css' %}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{% static 'css/timeline.css' %}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{% static 'css/sb-admin-2.css' %}" rel="stylesheet">
    <link href="{% static 'css/bootstrap-select.css' %}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{% static 'css/font-awesome.min.css' %}" rel="stylesheet" type="text/css">

    <!-- Open Layer3-->
    <link href="{% static 'css/ol.css' %}" rel="stylesheet" type="text/css">

      <!-- jQuery -->
    <script src="{% static 'js/jquery.min.js' %}"></script>
    <script src="{% static 'js/bootstrap-select.js' %}"></script>

        <!-- Bootstrap Core JavaScript -->
    <script src="{% static 'js/bootstrap.min.js' %}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{% static 'js/metisMenu.min.js' %}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- Open Layer3-->
    <script src="{% static 'js/ol.js' %}"></script>
    <script src="{% static 'js/indicadores.js' %}"></script>

</head>
<body>

   <div id="wrapper">

        <!-- Navigation -->
<nav class="navbar_indicadores navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#002B43;position:fixed;width:100%;">
            <div class="navbar-header" style="font-family: 'Open Sans Condensed Bold';">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navcoll">
            <ul class="nav navbar-top-links navbar-left" style="font-family: 'Open Sans Condensed Bold';">
                <a class="navbar-brand" href="/" style=""><p><img src="{% static 'images/globe-4-xxl.png' %}" alt="Mapa" style="width:28px;"> MAPA</p></a>
                <a class="navbar-brand" href="/ciudades" style=""><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
                <a class="navbar-brand" href="/categoria" style=""><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

            </ul>
            <ul class="nav navbar-top-links navbar-right" style="font-family: 'open-sans condensed bold';">
                <a class="navbar-brand" href="/nosotros" style=""><p><img src="{% static 'images/person.png' %}" alt="" style="width:25px;"> NOSOTROS</p></a>
            </ul>
            <!-- /.navbar-top-links -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>         
<div id="page-wrapper" style="margin:0;">
            
            <div class="row" style="padding-top:55px;">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-md-4 col-lg-4" >
                        <ol class="breadcrumb" style="font-size:12px;">
                          <li><a href="/indicadores">Indicadores</a></li>
                          <li><a href="/categorias">Categorias</a></li>
                          <li class="active">Indicador</li>
                        </ol>
                            <div class="well">
                                    <div>
                                        <ul class="nav nav-list">
                                            {% for categoria in categorias %}
                                            <li><label class="tree-toggle nav-header">{{categoria.nombre}}</label>
                                                <ul class="nav nav-list tree">
                                                    {% for indicador in indicadores %}
                                                    {% if indicador.categoria == categoria %}
                                                    <li><a href="/indicador/?i={{indicador.id}}">{{indicador.variable}}</a></li>
                                                    {% endif %}
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                            {% if not forloop.last %}<li class="divider"></li>{%endif%}
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                                <script>
                                $('.tree-toggle').click(function () {
                                    $(this).parent().children('ul.tree').toggle(200);
                                    });
                                </script>
    
                    </div>

                <div class="col-xs-12 col-md-8 col-lg-8">
                    <p style="text-align: center;font-family: 'Open Sans Condensed Bold';font-size: 34px;color:#002B43;">{{ind.variable}}</p>
                    <!--<p style="text-align: -webkit-center;">
                        <img src="{{ind.categoria.icono.url}}" alt="cat" style="width:18%;">
                    </p>-->
                    <div class="col-xs-12 col-md-12 col-lg-12">

                    <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Información del indicador
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Descripción</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Fuente</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Comentarios</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <p>{{indicador.descripcion}}.</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p>fuente - enlace </p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <p>Zona de comentarios del indicador por parte del creador o administrador</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>    
                    datos:
                    {% for dato in datos %}
                        {{dato.ciudad}}
                    {% endfor %}

                    </div>                                                                                                                                     
                
                    </div>
                  
                    <!--fin columna derecha-->
                </div>                              

                </div>
            
        </div>       


</div>

</body>
</html>
