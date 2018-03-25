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
var ciudades_santiago=[];
var ciudades_copiapo=[];
var ciudades_serena=[];
var ciudades_temuco=[];
var ciudades_concepcion=[];
var ciudades_valdivia=[];

var santiago = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-70.654, -33.444])),
        //url:'/ciudad/?i=1',
        url:'/ciudad/Gran_Santiago',
        nombre:'Santiago'
      });
var copiapo = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-70.3236, -27.3697])),
        //url:'/ciudad/?i=4',
        url:'/ciudad/Copiapo',
        nombre:'Copiapo'
      });
var serena = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-71.2449, -29.8995])),
        //url:'/ciudad/?i=5',
        url:'/ciudad/La_Serena',
        nombre:'La Serena'
      });
var temuco = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-72.5534, -38.7273])),
        //url:'/ciudad/?i=3',
        url:'/ciudad/Temuco',
        nombre:'Temuco'
      });
var valdivia = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-73.2287, -39.8365])),
        //url:'/ciudad/?i=7',
        url:'/ciudad/Valdivia',
        nombre:'Valdivia'
      });
var concepcion = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-73.0340, -36.8159])),
        //url:'/ciudad/?i=7',
        url:'/ciudad/Gran_Concepcion',
        nombre:'Concepcion'
      });

ciudades_santiago.push(santiago);
ciudades_copiapo.push(copiapo);
ciudades_serena.push(serena);
ciudades_temuco.push(temuco);
ciudades_valdivia.push(valdivia);
ciudades_concepcion.push(concepcion);

var vectorSource_santiago = new ol.source.Vector({
  features: ciudades_santiago //add an array of features
});

var iconStyle_santiago = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 10],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "/static/img/icon_santiago.png"
  }))
});

var vectorLayer_santiago = new ol.layer.Vector({
  source: vectorSource_santiago,
  style: iconStyle_santiago
});

var vectorSource_concepcion = new ol.source.Vector({
  features: ciudades_concepcion //add an array of features
});

var iconStyle_concepcion = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 10],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "/static/img/icon_concepcion.png"
  }))
});

var vectorLayer_concepcion = new ol.layer.Vector({
  source: vectorSource_concepcion,
  style: iconStyle_concepcion
});

var vectorSource_temuco = new ol.source.Vector({
  features: ciudades_temuco //add an array of features
});

var iconStyle_temuco = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 10],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "/static/img/icon_temuco.png"
  }))
});

var vectorLayer_temuco = new ol.layer.Vector({
  source: vectorSource_temuco,
  style: iconStyle_temuco
});

var vectorSource_copiapo = new ol.source.Vector({
  features: ciudades_copiapo //add an array of features
});

var iconStyle_copiapo = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 10],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "/static/img/icon_copiapo.png"
  }))
});

var vectorLayer_copiapo = new ol.layer.Vector({
  source: vectorSource_copiapo,
  style: iconStyle_copiapo
});

var vectorSource_serena = new ol.source.Vector({
  features: ciudades_serena //add an array of features
});

var iconStyle_serena = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 10],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "/static/img/icon_serena.png"
  }))
});

var vectorLayer_serena = new ol.layer.Vector({
  source: vectorSource_serena,
  style: iconStyle_serena
});

var vectorSource_valdivia = new ol.source.Vector({
  features: ciudades_valdivia //add an array of features
});

var iconStyle_valdivia = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 10],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    opacity: 0.75,
    src: "/static/img/icon_valdivia.png"
  }))
});

var vectorLayer_valdivia = new ol.layer.Vector({
  source: vectorSource_valdivia,
  style: iconStyle_valdivia
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
            'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            ol.source.OSM.ATTRIBUTION
          ],
          url: 'https://{a-c}.tile.openstreetmap.org/{z}/{x}/{y}.png'
        })
      });


var map = new ol.Map({
      controls: ol.control.defaults({
        attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
            collapsible: false
        })
      }).extend([mousePositionControl]),
        layers: [
          osmmap,raster,vector,vectorLayer_santiago,vectorLayer_concepcion,vectorLayer_temuco,vectorLayer_copiapo,vectorLayer_valdivia,vectorLayer_serena
        ],
        target: 'map',
        view: new ol.View({
          center: ol.proj.fromLonLat([-72.54, -36.14]),
          zoom: 5
        })
});


map.on("click", function(e) {
    map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {
        var url= feature.getProperties('url');
        window.location.href = "/ciudad";
        //window.location.href = ""+url.url;
    })
});
