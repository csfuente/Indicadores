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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                <div class="col-lg-12">


                <p style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color:#007DC3;color:#ffffff;text-align: center;margin-left: 15px;margin-right: 15px;">Nombre Categoría</p>

                <div class="col-md-4" >
                    <ol class="breadcrumb" style="font-size:12px;">
                      <li><a href="/indicadores">Indicadores</a></li>
                      <li><a href="/categorias">Categorias</a></li>
                      <li class="active">Nombre Categoría</li>
                    </ol>
                        <div class="well">
                                <div>
                                    <ul class="nav nav-list">
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

                  <div id="custom-search-input" style="padding-left:20px;padding-right:20px;margin-bottom:20px;">
                     <div class="input-group col-md-12">
                         <input type="text" class="form-control input-lg" placeholder="Ingrese indicador a buscar" />
                         <span class="input-group-btn">
                             <button class="btn btn-info btn-lg" type="button">
                                 <i class="glyphicon glyphicon-search"></i>
                             </button>
                         </span>
                     </div>
                 </div>


                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/indicador">
                         <img src="{% static 'images/indicador1.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>
                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador2.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>
                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador3.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>
                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador4.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>

                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador1.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>
                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador2.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>
                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador3.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>
                  <div class="col-md-3">
                     <div class="thumbnail" style="border:none;">
                       <a href="/categoria">
                         <img src="{% static 'images/indicador4.jpg' %}" alt="Lights" >
                         <div class="caption">
                           <p style="text-align:center;">Descripción</p>
                         </div>
                       </a>
                     </div>
                   </div>


                    <!--fin columna derecha-->
                </div>  


                        
                    </div>                                               
                </div>

              </div>


            
        </div>       


</div>




<script src="{% static 'bower_components/bootstrap/dist/js/leaflet-search.js' %}"></script>





</body>
</html>
