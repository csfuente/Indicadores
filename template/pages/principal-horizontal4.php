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

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#002B43;position:static;width:100%;">
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
                <a class="navbar-brand" href="/ciudades" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
                <a class="navbar-brand" href="/categoria" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

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


                <div class="col-xs-8 col-md-4 col-lg-4" style="-webkit-transform: translate(42px,80px);z-index:1000;">
                    <div class="panel panel-info" style="background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 0);">
                        <div class="panel-body">
                                <h3 style="font-family: 'Open Sans Condensed Bold';">Bienvenido</h3>
                                <p style="padding-right:55px;">
                                En esta plataforma hay indicadores de sustentabilidad para:
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
 <script>
var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');

/**
 * Create an overlay to anchor the popup to the map.
 */
var overlaypop = new ol.Overlay(/** @type {olx.OverlayOptions} */ ({
  element: container,
  autoPan: true,
  autoPanAnimation: {
    duration: 250
  }
}));


/**
 * Add a click handler to hide the popup.
 * @return {boolean} Don't follow the href.
 */
closer.onclick = function() {
  overlaypop.setPosition(undefined);
  closer.blur();
  return false;
};


var santiagoLonLat = [-70.654, -33.444];
var santiagoWebMercator = ol.proj.fromLonLat(santiagoLonLat);

var raster = new ol.layer.Tile({
        source: new ol.source.OSM()
      });

var source = new ol.source.Vector({wrapX: false});

var vector = new ol.layer.Vector({
        source: source
      });
     
var typeSelect = document.getElementById('type');

var arreglo_puntos=[];
var flag_puntos=false;

var draw; // global so we can remove it later


/////////////////marker ciudades///////////////////////
var ciudades_features=[];
var santiago = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-70.654, -33.444])),
        url:'/ciudad/?i=1',
        nombre:'Santiago'
      });
var copiapo = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-70.3236, -27.3697])),
        url:'/ciudad/?i=4',
        nombre:'Copiapo'
      });
var serena = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-71.2449, -29.8995])),
        url:'/ciudad/?i=5',
        nombre:'La Serena'
      });
var temuco = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-72.5534, -38.7273])),
        url:'/ciudad/?i=3',
        nombre:'Temuco'
      });
var valdivia = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-73.2287, -39.8365])),
        url:'/ciudad/?i=7',
        nombre:'Valdivia'
      });
var concepcion = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-73.0340, -36.8159])),
        url:'/ciudad/?i=7',
        nombre:'Concepcion'
      });


ciudades_features.push(santiago);
ciudades_features.push(copiapo);
ciudades_features.push(serena);
ciudades_features.push(temuco);
ciudades_features.push(valdivia);
ciudades_features.push(concepcion);

var vectorSource = new ol.source.Vector({
  features: ciudades_features //add an array of features
});
var iconStyle = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 46],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "{% static 'images/marker-icon.png' %}"
  }))
});
var vectorLayer = new ol.layer.Vector({
  source: vectorSource,
  style: iconStyle
});
/////////////////////////////////////////////////////////

 var mousePositionControl = new ol.control.MousePosition({
        coordinateFormat: ol.coordinate.createStringXY(4),
        projection: 'EPSG:4326',
        // comment the following two lines to have the mouse position
        // be placed within the map.
        className: 'custom-mouse-position',
        target: document.getElementById('mouse-position'),
        undefinedHTML: '&nbsp;'
      });

var osmmap = new ol.layer.Tile({
        source: new ol.source.OSM({
          attributions: [
            'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            ol.source.OSM.ATTRIBUTION
          ],
          url: 'http://{a-c}.tile.openstreetmap.org/{z}/{x}/{y}.png'
        })
      });

var map = new ol.Map({
        controls: ol.control.defaults({
          attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
            collapsible: false
          })
        }).extend([mousePositionControl]),
        layers: [
          osmmap,raster,vector,vectorLayer
        ],
        overlays: [overlaypop],
        target: 'map',
        view: new ol.View({
          center: santiagoWebMercator,
          zoom: 5
        })
      });


map.on("click", function(e) {
    map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {
        var url= feature.getProperties('url');
        window.location.href = ""+url.url;
    })
});



// add popup
map.on('pointermove', function(e) {
    map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {
        var url= feature.getProperties('url');
        var coordinate = e.coordinate;
        var hdms = ol.coordinate.toStringHDMS(ol.proj.transform(
            coordinate, 'EPSG:3857', 'EPSG:4326'));
        content.innerHTML = '<p>Al entrar aquí, verá los indicadores de ' + url.nombre +
            '</p>';
        overlaypop.setPosition(coordinate);
    })
});

    </script>

</body>
</html>

