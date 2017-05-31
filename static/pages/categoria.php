<!DOCTYPE html>
<html>
<head>

  <title>Cedeus</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {% load static %}
  <link rel="shortcut icon" type="image/png" href="{% static 'favicon.ico' %}"/>
   <link href="{% static 'css/ciudad.css' %}" rel="stylesheet">
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
       <a class="navbar-brand" href="/" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/globe-4-xxl.png' %}" alt="Mapa" style="width:28px;"> MAPA</p></a>
       <a class="navbar-brand" href="/ciudades" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
       <a class="navbar-brand" href="/comparar_ciudades" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> COMPARAR CIUDADES</p></a>

     </ul>
    <!-- /.navbar-top-links -->
  </div>

  <!-- /.navbar-static-side -->
</nav> 
<div id="page-wrapper" style="margin:0;">

  <div class="row" style="padding-top:55px;">
    <div class="col-xs-12 col-md-12 col-lg-12">


      <p style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color:#007DC3;color:#ffffff;text-align: center;margin-left: 15px;margin-right: 15px;">{{cat.nombre}}</p>

      <div class="col-xs-12 col-md-4 col-lg-4" >
        <ol class="breadcrumb" style="font-size:12px;">
          <li><a href="/categoria">Indicadores</a></li>
          <li><a href="/categoria">Categorias</a></li>
          <li class="active">{{cat.nombre}}</li>
        </ol>
        <div class="well">
          <div>
            <ul class="nav nav-list">
              {% for categoria in categorias %}
              <li><!--<label class="tree-toggle nav-header">{{categoria.nombre}}</label>-->
                <ul class="nav nav-list tree">
                  <li><a href="/categoria/?i={{categoria.id}}">{{categoria.nombre}}</a></li>
                </ul>
              </li>
              {% if not forloop.last %}<li class="divider"></li>{%endif%}
              {% endfor %}
            </ul>

          </div>
        </div>
        <script>
        $('.tree-toggle').click(function () {
          $(this).parent().children('ul.tree').toggle(200);
        });
        </script>

      </div>

      <div class="col-xs-12 col-md-8 col-lg-8">
        <form method="get" action="/categoria/">
        <div id="custom-search-input" style="padding-left:20px;padding-right:20px;margin-bottom:20px;">
         <div class="input-group col-xs-12 col-md-12 col-lg-12">
            <input type="hidden" name="i" value="{{i}}" />
            <input type="text" name="busqueda" class="form-control input-lg" placeholder="Ingrese indicador a buscar" />
            <span class="input-group-btn">
             <button class="btn btn-info btn-lg" type="submit">
               <i class="glyphicon glyphicon-search"></i>
             </button>
           </span>
         </div>
       </div>
        </form>


{% if aaa %}
       {% for indicador in indicadores %}
       {% if indicador.categoria == cat %}
       <div class="col-xs-6 col-md-12 col-lg-12 indicator">

           <a href="/indicador/?i={{indicador.id}}">

               <p style="">

                {% if cat.nombre == 'Medio Ambiente' %}
                <img src="{% static 'images/categoria_medioambiente.png' %}" style="width:6%;">
                {% elif cat.nombre == 'Salud' %}
                <img src="{% static 'images/categoria_salud.png' %}" style="width:6%;">
                {% elif cat.nombre == 'Equidad' %}
                <img src="{% static 'images/categoria_equidad.png' %}" style="width:6%;">
                {% elif cat.nombre == 'Accesibilidad' %}
                <img src="{% static 'images/categoria_accesibilidad.png' %}" style="width:6%;">
                {% else %}
                <img src="{% static 'images/categoria_gobernancia.png' %}" style="width:6%;">
                {% endif %}

                {{indicador.variable}}
                </p>

           </a>

       </div>
       {% endif %}
       {% endfor %}
{% else %}
       {% for indicador in indicadores %}
       <div class="col-xs-6 col-md-12 col-lg-12 indicator">

           <a href="/indicador/?i={{indicador.id}}">

               <p style="">

                {% if indicador.categoria.nombre == 'Medio Ambiente' %}
                <img src="{% static 'images/categoria_medioambiente.png' %}" style="width:6%;">
                {% elif indicador.categoria.nombre == 'Salud' %}
                <img src="{% static 'images/categoria_salud.png' %}" style="width:6%;">
                {% elif indicador.categoria.nombre == 'Equidad' %}
                <img src="{% static 'images/categoria_equidad.png' %}" style="width:6%;">
                {% elif indicador.categoria.nombre == 'Accesibilidad' %}
                <img src="{% static 'images/categoria_accesibilidad.png' %}" style="width:6%;">
                {% else %}
                <img src="{% static 'images/categoria_gobernancia.png' %}" style="width:6%;">
                {% endif %}

                {{indicador.variable}}
                </p>

           </a>

       </div>
       {% endfor %}

{% endif %}

       <!--fin columna derecha-->
     </div> 
   </div>                                               
 </div>

</div>
</div>       
</div>

</body>
</html>
