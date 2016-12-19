<!DOCTYPE html>
<html>
<head>
    
    <title>Cedeus</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% load static %}
     <!-- Bootstrap Core CSS -->
    <link href="{% static 'bower_components/bootstrap/dist/css/bootstrap.min.css' %}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{% static 'bower_components/metisMenu/dist/metisMenu.min.css' %}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{% static 'dist/css/timeline.css' %}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{% static 'dist/css/sb-admin-2.css' %}" rel="stylesheet">
    <link href="{% static 'dist/css/bootstrap-select.css' %}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{% static 'bower_components/font-awesome/css/font-awesome.min.css' %}" rel="stylesheet" type="text/css">

      <!-- jQuery -->
    <script src="{% static 'bower_components/jquery/dist/jquery.min.js' %}"></script>
    <script src="{% static 'dist/js/bootstrap-select.js' %}"></script>

        <!-- Bootstrap Core JavaScript -->
    <script src="{% static 'bower_components/bootstrap/dist/js/bootstrap.min.js' %}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{% static 'bower_components/metisMenu/dist/metisMenu.min.js' %}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="{% static 'bower_components/morrisjs/morris.js' %}"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
  <link rel="stylesheet" href="{% static 'bower_components/morrisjs/morris.css' %}">
  <script src="{% static 'js/jquery.blockUI.js' %}"></script>   


    <link rel="stylesheet" href="{% static 'bower_components/bootstrap/dist/css/leaflet.css' %}" />
    <script src="{% static 'bower_components/bootstrap/dist/js/leaflet.js' %}"></script>
    <script src="{% static 'bower_components/bootstrap/dist/js/togeojson.js' %}"></script>
    <script src="{% static 'bower_components/bootstrap/dist/js/l.control.geosearch.js' %}"></script>
    <script src="{% static 'bower_components/bootstrap/dist/js/l.geosearch.provider.openstreetmap.js' %}"></script>
    <link rel="stylesheet" href="{% static 'bower_components/bootstrap/dist/css/l.geosearch.css' %}" />

    <script src="{% static 'bower_components/bootstrap/dist/js/leaflet-pip.js' %}"></script>
    

</head>
<body>

   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#002B43;">
            <div class="navbar-header" style="font-family: 'Open Sans Condensed Bold';">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" style="color:#3D99CD;font-size:25px;">CEDEUS</a>
                <a class="navbar-brand" href="/" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/globe-4-xxl.png' %}" alt="Mapa" style="width:28px;"> MAPA</p></a>
                <a class="navbar-brand" href="/ciudades" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
                <a class="navbar-brand" href="/indicadores" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>
            </div>
            <!-- /.navbar-header -->

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
                        <li><a href="/admin"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li>
                    <img src="{% static 'images/logoUC_color.png' %}" alt="Mapa" style="width:28px;">
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


            <!-- /.navbar-static-side -->
        </nav>
         <div id="page-wrapper" style="margin:0;">
            
            <div class="row" style="padding-top:10px;">
                <div class="col-md-12">
                <div class="col-md-4" >
                    <ol class="breadcrumb" style="font-size:12px;">
                      <li><a href="/indicadores">Indicadores</a></li>
                      <li><a href="/categorias">Categorias</a></li>
                      <li class="active">Indicador</li>
                    </ol>
                        <div class="well">
                                <div>
                                    <ul class="nav nav-list">
                                        <li><label class="tree-toggle nav-header">Categoría</label>
                                            <ul class="nav nav-list tree">
                                                <li><a href="#">Otro indicador</a></li>
                                                <li><a href="#">Otro indicador</a></li>
                                                <li><a href="#">Otros indicador</a></li>
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li><label class="tree-toggle nav-header">Otras categorías</label>
                                            <ul class="nav nav-list tree">
                                                <li><a href="#">Entorno construido</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                                <li><a href="#">Acceso y movilidad</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <script>
                            $('.tree-toggle').click(function () {
                                $(this).parent().children('ul.tree').toggle(200);
                                });
                            </script>

                </div>

                <div class="col-md-8">
                    <p style="text-align: center;font-family: 'Open Sans Condensed Bold';font-size: 34px;color:#002B43;">Nombre Indicador</p>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                    <div class="col-md-3" style="text-align: -webkit-center;">
                        <p style="font-family: 'Open Sans Condensed Bold';font-size:24px;color:#000;">Categoría:</p>
                        <p style="text-align: -webkit-center;">
                            <img src="{% static 'images/categoria1.jpg' %}" alt="cat" style="width:95%;">
                        </p>
                    </div>
                    <div class="col-md-6" style="text-align: -webkit-center;">
                        <p style="font-family: 'Open Sans Condensed Bold';font-size:24px;color:#000;">Estado:</p>
                        <p><div class="alert alert-success">
                              <strong style="font-family: 'Open Sans';font-size:22px;">OK</strong>
                               
                            </div></p>
                    </div> 
                    <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Información del indicador
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Significado</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Sobre el indicador</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Editar</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Significado:</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <a class="teal-text"><i class="fa fa-pencil"></i></a> 
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Sobre el indicador:</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <a class="teal-text"><i class="fa fa-pencil"></i></a>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                        <div class="form-group">
                                          <label for="usr">Categoría:</label>
                                          <input type="text" class="form-control" id="usr" placeholder="categoria1">
                                        </div>
                                        <div class="form-group">
                                          <label for="pwd">Otro campo:</label>
                                          <input type="text" class="form-control" id="pwd">
                                        </div>
                                        <div class="form-group">
                                          <label for="comment">Preguntas:</label>
                                          <textarea class="form-control" rows="5" id="comment"></textarea>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>    
                    </div>                                                                                                                                     
                
                    </div>
                    <div class="col-md-2">
                    </div>                    

                    <!--fin columna derecha-->
                </div>                              

                </div>
            
        </div>       


</div>




<script src="{% static 'bower_components/bootstrap/dist/js/leaflet-search.js' %}"></script>





</body>
</html>
