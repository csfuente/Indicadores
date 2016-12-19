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
  <link rel="stylesheet" href="{% static 'bower_components/morrisjs/morris.css '%}">
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
                <a class="navbar-brand" href="#" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>
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
                    <div class="panel panel-info">
                        <div class="panel-heading text-center" style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color:#007DC3;color:#ffffff;">

                            <p>Nombre Ciudad</p>

                        </div>
                        <div class="panel-body">
                           <div class="col-lg-5">
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{% static 'images/santiago.jpg' %}" alt="Santiago1">
    </div>
    <div class="item">
      <img src="{% static 'images/santiago3.jpg' %}" alt="Santiago2">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                            </div>
                            <div class="col-lg-7">
                            <p>
                                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
                            </p>
                              <table class="table" style="font-size:20px;">
                                <tbody>
                                  <tr style="border-style: hidden;">
                                    <td style="width:30%;"><b>Nombre:</b></td>
                                    <td></td>
                                  </tr>
                                  <tr style="border-style: hidden;">
                                    <td style="width:30%;"><b>Habitantes:</b></td>
                                    <td></td>
                                  </tr>
                                  <tr style="border-style: hidden;">
                                    <td style="width:30%;"><b>Región:</b></td>
                                    <td></td>
                                  </tr>
                                  <tr style="border-style: hidden;">
                                    <td style="width:30%;"><b>Tipo de clima:</b></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
<div class="col-lg-12">
  <h1 style="font-family: 'Open Sans Condensed Bold';">Indicadores</h1>
  <table class="table table-bordered">
    <thead>
      <tr style="font-size:18px;font-family: 'Open Sans Condensed Bold';color:#ffffff;" background="{% static 'images/hojas.jpg' %}">
        <th colspan="4">Clasificaci&oacute;n 1 <span class="glyphicon glyphicon-leaf"></th>
      </tr>
      <tr style="font-size:18px;font-family: 'Open Sans Condensed Bold';">
        <th style="text-align:center;">Nombre:</th>
        <th style="text-align:center;">Valor:</th>
        <th style="text-align:center;">Estado:</th>
        <th style="text-align:center;">Descripci&oacute;n:</th>
      </tr>
    </thead>
    <tbody style="text-align:center;font-size:16px;">
      <tr>
        <td>Indicador1</td>
        <td>99,2%</td>
        <td><div class="alert alert-success">
              <strong>OK</strong> 
            </div></td>
        <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem 
          <button type="button" class="btn btn-default">Ver M&aacute;s <span class="glyphicon glyphicon-chevron-right"></button></td>
      </tr>
      <tr>
        <td>Indicador2</td>
        <td>54,4%</td>
        <td><div class="alert alert-danger">
              <strong>CR&Iacute;TICO</strong> 
            </div></td>
        <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem 
          <button type="button" class="btn btn-default">Ver M&aacute;s <span class="glyphicon glyphicon-chevron-right"></button></td>
      </tr>
    </tbody>
  </table>



  <table class="table table-bordered">
    <thead>
      <tr style="font-size:18px;font-family: 'Open Sans Condensed Bold';color:#ffffff;" background="{% static 'images/agua.jpg' %}">
        <th colspan="4">Clasificaci&oacute;n 2 <span class="glyphicon glyphicon-tint"></th>
      </tr>
      <tr style="font-size:18px;font-family: 'Open Sans Condensed Bold';">
        <th style="text-align:center;">Nombre:</th>
        <th style="text-align:center;">Valor:</th>
        <th style="text-align:center;">Estado:</th>
        <th style="text-align:center;">Descripci&oacute;n:</th>
      </tr>
    </thead>
    <tbody style="text-align:center;font-size:16px;">
      <tr>
        <td>Indicador1</td>
        <td>99,2%</td>
        <td><div class="alert alert-success">
              <strong>OK</strong> 
            </div></td>
        <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem 
          <button type="button" class="btn btn-default">Ver M&aacute;s <span class="glyphicon glyphicon-chevron-right"></button></td>
      </tr>
      <tr>
        <td>Indicador2</td>
        <td>54,4%</td>
        <td><div class="alert alert-warning">
              <strong>Advertencia</strong> 
            </div></td>
        <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem 
          <button type="button" class="btn btn-default">Ver M&aacute;s <span class="glyphicon glyphicon-chevron-right"></button></td>
      </tr>
    </tbody>
  </table>


</div>


                        </div>
                    </div>                                               
                </div>

              </div>


            
        </div>       


</div>




<script src="{% static 'bower_components/bootstrap/dist/js/leaflet-search.js' %}"></script>





</body>
</html>
