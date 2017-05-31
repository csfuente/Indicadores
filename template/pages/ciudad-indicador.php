<!DOCTYPE html>
<html>
<head>
    
    <title>{{ciudad.nombre}} - {{indicador.variable}}</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% load static %}
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
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#002B43;position:fixed;width:100%;">
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
               <a class="navbar-brand" href="/" style="color:#3D99CD;font-size:25px;">CEDEUS</a>
                <a class="navbar-brand" href="/" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/globe-4-xxl.png' %}" alt="Mapa" style="width:28px;"> MAPA</p></a>
                <a class="navbar-brand" href="/ciudades" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
                <a class="navbar-brand" href="/indicadores" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

            </ul>
            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
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
                      <li><a href="/ciudades">Ciudades</a></li>
                      <li><a href="/ciudad/?i={{ciudad.id}}">{{ciudad.nombre}}</a></li>
                      <li class="active">{{indicador.variable}}</li>
                    </ol>
                        <div class="well">
                                <div>
                                    <p style="text-align:center;"><strong>Otros indicadores</strong></p>
                                    <ul class="nav nav-list">
                                        {% for categoria in categorias %}
                                        <li><label class="tree-toggle nav-header">{{categoria.nombre}}</label>
                                            <ul class="nav nav-list tree">
                                                {% for indicador in indicadores %}
                                                {% if indicador.categoria == categoria %}
                                                <li><a href="/ciudadindicador/?c={{ciudad.id}}&i={{indicador.id}}">{{indicador.variable}}</a></li>
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
                    <p style="text-align: center;font-family: 'Open Sans Condensed Bold';font-size: 34px;color:#002B43;">{{ciudad.nombre}}</p>
                    <p style="text-align: center;font-family: 'Open Sans Condensed Bold';font-size: 28px;color:#002B43;">{{indicador.variable}}</p>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <p style="text-align: -webkit-center;">
                            <img src="{{indicador.icono.url}}" alt="Mapa" style="width:30%;">
                        </p>
                    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: -webkit-center;">
                        <p><div style="font-family: 'Open Sans';font-size:22px;color:#fffff;"><strong style="font-family: 'Open Sans Condensed Bold';font-size:24px;color:#000;">Categoría: </strong>{{indicador.categoria.nombre}}</div></p>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: -webkit-center;">
                        <p><div style="font-family: 'Open Sans';font-size:22px;color:#fffff;"><strong style="font-family: 'Open Sans Condensed Bold';font-size:24px;color:#000;">Valor: </strong> dato.ciudad.valor [unidad de medida]</div></p>
                    </div>                  
                    <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detalles
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
                    </div>                                                                                                                                     
                
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                    </div>                    

                    <!--fin columna derecha-->
                </div>                              

                </div>

              </div>

            
        </div>       
        <footer class="footer">
            <div class="container">

                <p class="text-muted">En construcción</p>

            </div>
        </footer>

</div>

</body>
</html>
