<!DOCTYPE html>
<html>
<head>
    
    <title>Indicadores Cedeus</title>

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


    
<style>
#legend{
    position:absolute; 
    right:12px; 
    bottom:0px; 
    z-index:10000; 
    width:165px; 
    height:72px; 
    background:#rgba(255, 240, 240, 0);
}
      .ol-popup {
        position: absolute;
        background-color: white;
        -webkit-filter: drop-shadow(0 1px 4px rgba(0,0,0,0.2));
        filter: drop-shadow(0 1px 4px rgba(0,0,0,0.2));
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #cccccc;
        bottom: 12px;
        left: -50px;
        min-width: 280px;
      }
      .ol-popup:after, .ol-popup:before {
        top: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }
      .ol-popup:after {
        border-top-color: white;
        border-width: 10px;
        left: 48px;
        margin-left: -10px;
      }
      .ol-popup:before {
        border-top-color: #cccccc;
        border-width: 11px;
        left: 48px;
        margin-left: -11px;
      }
      .ol-popup-closer {
        text-decoration: none;
        position: absolute;
        top: 2px;
        right: 8px;
      }
      .ol-popup-closer:after {
        content: "✖";
      }
</style>
</head>
<body>

   <div id="wrapper">

<nav class="navbar_indicadores navbar navbar-default navbar-static-top" role="navigation" style="">
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
            <ul class="nav navbar-top-links navbar-left" style="font-family: 'open-sans condensed bold';">
                <a class="navbar-brand" href="/ciudades" style=""><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profileaaa</a>
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
<div id="map" style="">
    <div id="legend">
                    <img src="{% static 'images/cedeus_logo.png' %}" alt="Mapa" style="width: 50px;padding-right:8px;opacity: 0.5;">
                    <img src="{% static 'images/uc_logo.png' %}" alt="Mapa" style="width: 50px;opacity: 0.5;">
                    <img src="{% static 'images/udec_logo.png' %}" alt="Mapa" style="width: 50px;opacity: 0.5;">
    </div>
</div>

         <div id="page-wrapper" style="margin:0;">


                <div class="map_panel">
                    <div class="panel panel-info" style="background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 0);">
                        <div class="panel-body" style="background-color:rgba(236, 236, 236, 0.49);">
                                <h3>Bienvenido</h3>
                                <p>
                                En esta plataforma encontrará indicadores de:
                                </p>
                            <div class="tagcloud02">
                              <ul>
                                {% for ciudad in ciudades %}
                                <li><a href="/ciudad/?i={{ciudad.id}}">{{ciudad.nombre}}</a></li>
                                {% endfor %}
                              </ul>
                            </div>                                                    
                        </div>
                    </div>                                               
                </div>
        </div> 


<div id="popup" class="ol-popup">
    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
    <div id="popup-content"></div>
</div>

</div>
<script type="text/javascript" src="{% static 'js/mapa.js' %}"></script>
</body>
</html>

