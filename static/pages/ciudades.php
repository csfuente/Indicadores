<!DOCTYPE html>
<html>
<head>
    
    <title>Ciudades</title>

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
                <a class="navbar-brand" href="/comparar_ciudades" style=""><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> COMPARAR CIUDADES</p></a>
                <a class="navbar-brand" href="/categoria" style=""><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

            </ul>
            <ul class="nav navbar-top-links navbar-right" style="font-family: 'open-sans condensed bold';">
                <a class="navbar-brand" href="/nosotros" style=""><p><img src="{% static 'images/person.png' %}" alt="" style="width:25px;"> NOSOTROS</p></a>
            </ul>
            <!--
            <ul class="nav navbar-top-links navbar-right">
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
                </li>
            </ul>
            -->
            <!-- /.navbar-top-links -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>         
<div id="page-wrapper" style="margin:0;">
            
            <div class="row" style="padding-top:78px;">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    {% for ciudad in ciudades %}
                        <div class="col-xs-6 col-md-4 col-lg-4">
                            <p><a href="/ciudad/?i={{ciudad.id}}" style="text-decoration:none;"><img src="{{ciudad.imagen.url}}" alt="{{ciudad.id}}" style="width:100%;"></p>
                            <p style="text-align:center;">{{ciudad.nombre}}</a></p>
                            <p style="text-align:center;">Población: {{ciudad.habitantes}} - Clima: {{ciudad.clima}}<br>
                               Altura:
                            </p>
                        </div>
		              {% endfor %}    
              </div>
        </div>       
</div>
</body>
</html>
