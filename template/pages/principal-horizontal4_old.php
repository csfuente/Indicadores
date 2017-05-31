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
<div id="mapid" style="position: fixed; height: 100%; width: 100%; outline: none;margin-top:42px;"></div>
         <div id="page-wrapper" style="margin:0;">


                <div class="col-xs-8 col-md-3" style="-webkit-transform: translate(42px,80px);">
                    <div class="panel panel-info" style="background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 0);">
                        <div class="panel-body">

                            <p>
                                <h1 style="font-family: 'Open Sans Condensed Bold';">Bienvenidos</h1>
                            </p>
                            
                            <div class="list-group" style="font-family: 'Open Sans';">
                              {% for ciudad in ciudades %}
                              <a href="/ciudad/?i={{ciudad.id}}" class="list-group-item list-group-item-success">{{ciudad.nombre}}</a>
                              {% endfor %}
                            </div>
                                                    
                        </div>
                    </div>                                               
                </div>

                <div class="col-xs-2 col-md-2" id="logos" style="text-align:center;transform: translate3d(375%,74%,0px);">
                    <img src="{% static 'images/logoUC_color.png' %}" alt="Mapa" style="width:60px;">
                    <img src="{% static 'images/udec.png' %}" alt="Mapa" style="width:60px;padding-top:4px;">
                </div>
        </div>       
</div>




<script src="{% static 'bower_components/bootstrap/dist/js/leaflet-search.js' %}"></script>

<script type="text/javascript">
  jQuery(function($) {

    if (jQuery(window).width() > 992){
          jQuery("#logos").css({
            "transform":"translate(360%,74%)",
          });

    }
    else{
          jQuery("#logos").css({
            "transform":"translate(112%,74%)",
          });  
    }

 jQuery(window).resize(function() {

    if (jQuery(window).width() > 992){
          jQuery("#logos").css({
            "transform":"translate(360%,74%)",
          });
    }  
    else{
          jQuery("#logos").css({
            "transform":"translate(112%,74%)",
          });
    }
 
  });
 });
</script>

<script>



    var mymap = L.map('mapid').setView([-33.4609448,-70.7683587], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmljYXJkb2FyZGlsZXMiLCJhIjoiY2l1OXhxNXB6MDAwcTJ0bnc1OXVidWJhayJ9.2zTOmufaOwMxLfj4dRzcdA', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'your.mapbox.project.id',
    accessToken: 'your.mapbox.public.access.token'
}).addTo(mymap);

var geoSearchController=new L.Control.GeoSearch({
    provider: new L.GeoSearch.Provider.OpenStreetMap(),
    position: 'topleft',
    showMarker: true,
    retainZoomLevel: false,
}).addTo(mymap);


L.marker([-33.4525,-70.6585]).addTo(mymap).on('click', onClick1);
L.marker([-38.6657,-72.6472]).addTo(mymap).on('click', onClick2);
L.marker([-39.8169,-73.2324]).addTo(mymap).on('click', onClick3);
L.marker([-27.3675,-70.3282]).addTo(mymap).on('click', onClick4);
L.marker([-29.9030,-71.2503]).addTo(mymap).on('click', onClick5);
L.marker([-36.8454,-72.9681]).addTo(mymap).on('click', onClick6);

function onClick1(e) {
    location.href = "/ciudad/?i=1";
}

function onClick2(e) {
    location.href = "/ciudad/?i=3";
}

function onClick3(e) {
    location.href = "/ciudad/?i=7";
}

function onClick4(e) {
    location.href = "/ciudad/?i=4";
}

function onClick5(e) {
    location.href = "/ciudad/?i=5";
}

function onClick6(e) {
    location.href = "/ciudad/?i=6";
}
</script>




</body>
</html>

