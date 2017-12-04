<!DOCTYPE html>
<html>
<head>

  <title>Cedeus</title>

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
      <ul class="nav navbar-top-links navbar-left" style="font-family: 'Open Sans Condensed Bold';">
       <a class="navbar-brand" href="/" style="">CEDEUS</a>
       <a class="navbar-brand" href="/" style=""><p><img src="{% static 'images/globe-4-xxl.png' %}" alt="Mapa" style="width:28px;"> MAPA</p></a>
       <a class="navbar-brand" href="/ciudades" style=""><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
       <a class="navbar-brand" href="/indicadores" style=""><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

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
<div id="page-wrapper" style="margin:0;">

  <div class="row" style="padding-top:55px;">
    <div class="col-xs-12 col-md-12 col-lg-12">


      <p style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color:#007DC3;color:#ffffff;text-align: center;margin-left: 15px;margin-right: 15px;">{{cat.nombre}}</p>

      <div class="col-xs-12 col-md-4 col-lg-4" >
        <ol class="breadcrumb" style="font-size:12px;">
          <li><a href="/indicadores">Indicadores</a></li>
          <li><a href="/indicadores">Categorias</a></li>
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

        <div id="custom-search-input" style="padding-left:20px;padding-right:20px;margin-bottom:20px;">
         <div class="input-group col-xs-12 col-md-12 col-lg-12">
           <input type="text" class="form-control input-lg" placeholder="Ingrese indicador a buscar" />
           <span class="input-group-btn">
             <button class="btn btn-info btn-lg" type="button">
               <i class="glyphicon glyphicon-search"></i>
             </button>
           </span>
         </div>
       </div>

       {% for indicador in indicadores %}
       {% if indicador.categoria == cat %}
       <div class="col-xs-6 col-md-4 col-lg-4">
         <div class="thumbnail" style="border:none;">
           <a href="/indicador/?i={{indicador.id}}">
             <img src="{{ indicador.icono.url}}" alt="Lights" >
             <div class="caption">
               <p style="text-align:center;">{{indicador.variable}}</p>
             </div>
           </a>
         </div>
       </div>
       {% endif %}
       {% endfor %}


       <!--fin columna derecha-->
     </div> 
   </div>                                               
 </div>

</div>
</div>       
</div>

</body>
</html>
