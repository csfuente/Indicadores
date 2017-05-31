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
          osmmap,raster,vector
        ],
        target: 'map',
        view: new ol.View({
          center: santiagoWebMercator,
          zoom: 14
        })
      });










