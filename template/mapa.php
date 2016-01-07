<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cristian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="/cristian/css/bootstrap.css" rel="stylesheet" type="text/css">


    <script src="/cristian/js/jquery.js"></script>
    <!-- google maps -->
    <script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
    
    <script type="text/javascript">
  function initialize() {
    var position_santiago = new google.maps.LatLng(-33.4516582,-70.6618581);
    var position_concepcion = new google.maps.LatLng(-36.815716,-73.0422241);
    var position_serena = new google.maps.LatLng(-29.9465147,-71.2849566);
    var position_temuco = new google.maps.LatLng(-38.7368699,-72.5998801);
    var position_copiapo = new google.maps.LatLng(-27.3708833,-70.3317608);
    var position_valdivia = new google.maps.LatLng(-39.8220811,-73.2469748);
    var myOptions = {
      zoom: 5,
      center: position_santiago,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position_santiago,
        map: map,
        title:"Santiago",
    }); 

    var marker_concepcion = new google.maps.Marker({
        position: position_concepcion,
        map: map,
        title:"Concepcion"
    });  

    var marker_serena = new google.maps.Marker({
        position: position_serena,
        map: map,
        title:"La Serena"
    });

    var marker_temuco = new google.maps.Marker({
        position: position_temuco,
        map: map,
        title:"Temuco"
    });

    var marker_copiapo = new google.maps.Marker({
        position: position_copiapo,
        map: map,
        title:"Copiapo"
    });   

    var marker_valdivia = new google.maps.Marker({
        position: position_valdivia,
        map: map,
        title:"Valdivia"
    });      
 
    var contentString = 'Info Santiago';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var contentConcepcion = 'Info Concepcion';
    var infowindow_concepcion = new google.maps.InfoWindow({
        content: contentConcepcion
    });

    var contentSerena = 'Info La Serena/Coquimbo';
    var infowindow_serena = new google.maps.InfoWindow({
        content: contentSerena
    });

    var contentTemuco = 'Info Temuco';
    var infowindow_temuco = new google.maps.InfoWindow({
        content: contentTemuco
    });

    var contentCopiapo = 'Info Copiapo';
    var infowindow_copiapo = new google.maps.InfoWindow({
        content: contentCopiapo
    });

    var contentValdivia = 'Info Valdivia';
    var infowindow_valdivia = new google.maps.InfoWindow({
        content: contentValdivia
    });
 
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });

    google.maps.event.addListener(marker_concepcion, 'click', function() {
      infowindow_concepcion.open(map,marker_concepcion);
    });

    google.maps.event.addListener(marker_serena, 'click', function() {
      infowindow_serena.open(map,marker_serena);
    });

    google.maps.event.addListener(marker_temuco, 'click', function() {
      infowindow_temuco.open(map,marker_temuco);
    });

    google.maps.event.addListener(marker_copiapo, 'click', function() {
      infowindow_copiapo.open(map,marker_copiapo);
    });

    google.maps.event.addListener(marker_valdivia, 'click', function() {
      infowindow_valdivia.open(map,marker_valdivia);
    });
 
  }
 
</script>

  </head>

  <body onload="initialize()"> 
         
         <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">P&aacute;gina Principal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/cristian/mapa.php">Mapa</a></li>
            <li><a href="/cristian/info.php">Info</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->




<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><div id="map_canvas" style="width:400px; height:800px;"></div></div>
  <div class="col-md-4"></div>
</div>

      

    </div> <!-- /container -->
  </body>

  </html>

