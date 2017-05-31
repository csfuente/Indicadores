<!DOCTYPE html>
<html>
<head>

  <title>{{ciudad.nombre}}</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {% load static %}
  <!-- Bootstrap Core CSS -->
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
       <a class="navbar-brand" href="/comparar_ciudades" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> COMPARAR CIUDADES</p></a>
       <a class="navbar-brand" href="/categoria" style="color:#3D99CD;font-size:25px;"><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

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

  <div class="row" style="padding-top:55px;">
    <div class="col-xs-12 col-md-12 col-lg-12">


      <p style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color:#007DC3;color:#ffffff;text-align: center;margin-left: 15px;margin-right: 15px;">{{ciudad.nombre}}</p>


      <!--<div class="col-xs-5 col-md-5 col-lg-5">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" >

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

          </ol>


          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{{ciudad.imagen.url}}" alt="{{ciudad.nombre}}" style="width:100%;">
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>-->
<!--
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-xs-12 col-md-12 col-lg-12" style="text-align:center;">
          <div class="col-xs-4 col-md-4 col-lg-4">
            <strong>Región:</strong> {{ciudad.region}}
          </div>
          <div class="col-xs-4 col-md-4 col-lg-4">
            <strong>Habitantes:</strong> {{ciudad.habitantes}}
          </div>
          <div class="col-xs-4 col-md-4 col-lg-4">
            <strong>Clima:</strong> {{ciudad.clima}}
          </div>
          <div class="col-xs-12 col-md-12 col-lg-12" style="padding-top:8px;">
          <p style="text-align:justify;font-size:18px;">
            {{ciudad.descripcion}}
          </p>
          <p style="text-align:center;">
            {% for categoria in categorias %}
            <a href="#{{categoria.nombre}}"><button type="button" class="btn btn-default">{{categoria.nombre}}</button></a>
            {% endfor %}
          </p>
          </div>
        </div>
      </div>
-->

      <div class="col-xs-12 col-md-12 col-lg-12">
       <h1 style="font-family: 'Open Sans Condensed Bold';text-align:center;">Indicadores</h1>
       <p style="text-align:center;">
        <img src="{% static 'images/sustentable2.png' %}" style="width:8%;">
        <img src="{% static 'images/casi_sustentable2.png' %}" style="width:8%;">
        <img src="{% static 'images/no_sustentable2.png' %}" style="width:8%;">
       </p>

       {% for categoria in categorias %} 
       <div id="{{categoria.nombre}}">
       </div>
       <table class="table table-borderless" style="margin-bottom:0px;">
         <thead>
           <tr>
            <th colspan="4" style="text-align:center;font-size:26px;">{{categoria.nombre}}</th>
           </tr>
           <tr style="font-size:18px;font-family: 'Open Sans Condensed Bold';border-bottom-style:hidden;">
             <th style="text-align:center;width:30%;">Nombre</th>
             <th style="text-align:center;width:22%;">Valor</th>
             <th style="text-align:center;width:40%;">Información</th>
             <th style="width:8%"></th>
           </tr>
         </thead>
         <tbody style="text-align:center;font-size:16px;">
          {% for indicador in indicadores %}
          {% if indicador.categoria == categoria %}
          {% for dato in datos %}
          {% if dato.indicador == indicador %}
          <tr style="border-bottom-style:hidden;">
            <td>{{dato.indicador}}</td>
            {% if dato.tipo_variable == 'caracter' %}
            <td>{{dato.var_char}} [unidad medida]</td>
            {% elif dato.tipo_variable == 'numero entero'%}
            <td>{{dato.var_int}} [unidad medida]</td>
            {% else %}
            <td>{{dato.var_float}} [unidad medida]</td>
            {% endif%}
            <td>
              {{indicador.descripcion}} {{dato.fecha_indicador}}
              <a href="/ciudadindicador/?i={{indicador.id}}&c={{ciudad.id}}"><button type="button" class="btn btn-default">Ver M&aacute;s<span class="glyphicon glyphicon-chevron-right"></button></a>
            </td>
            {% if categoria.nombre == 'Medio Ambiente' %}
            <td>
              <img src="{% static 'images/sustentable.png' %}" alt="{{ciudad.nombre}}" style="width:50%;">
            </td>
            {% elif categoria.nombre == 'Salud' %}
            <td>
              <img src="{% static 'images/casi_sustentable.png' %}" alt="{{ciudad.nombre}}" style="width:50%;">
            </td>
            {% else %}
            <td>
              <img src="{% static 'images/no_sustentable.png' %}" alt="{{ciudad.nombre}}" style="width:50%;">
            </td>
            {% endif %}

            </tr>
            {% endif %}
            {% endfor %}
            {% endif %}
            {% endfor %}
          </tbody>
        </table>
        {% endfor %}  
      </div>
    </div>                                               
  </div>
</div>
</div>       
</body>
</html>
