<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ciudad.nombre}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="{{STATIC_URL}}css/bootstrap.css" rel="stylesheet" type="text/css">
 

    <script src="{{STATIC_URL}}js/jquery.js"></script>

  </head>

  <body> 
         
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
            <li class="active"><a href="/">Mapa</a></li>
            <li><a href="#">Info</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->

      
<div class="container" style="padding:54px;">
    
    <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-1"></div>
  <div class="col-md-8">

      <div id="info_santiago" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">{{ciudad.nombre}}</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="{{ciudad.imagen.url}}" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> {{ciudad.nombre}}</br>
                      <strong>Habitantes:</strong> {{ciudad.habitantes}}</br>
                      <strong>Region:</strong> {{ciudad.region}}</br>
                      <strong>Tipo Clima:</strong> {{ciudad.clima}}</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              
              {% for categoria in categorias %}
              <h1>{{categoria.nombre}}</h1>
              {% for indicador in indicadores %}
              {% if indicador.categoria == categoria %}
              <table class="table">
            <thead>
              <tr>
                <th>{{indicador.variable}}</th>
                {% for dato in datos %}
                {% if dato.indicador == indicador %}
                {% if dato.tipo_variable == 'char' %}
                <th>{{dato.var_char}}</th>
                {% endif %}
                {% if dato.tipo_variable == 'int' %}
                <th>{{dato.var_int}}</th>
                {% endif %}
                {% if dato.tipo_variable == 'float' %}
                <th>{{dato.var_float}}</th>
                {% endif %}
                {% endif %}
                {% endfor %}
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>40/100</td>
                <td>Temuco</td>
              </tr>
              <tr>
              <td>Peor Valor</td>
                <td>70/100</td>
                <td>Santiago</td>  
              </tr>
            </tbody>
          </table>
          {%endif%}
          {%endfor%}

              {% endfor %}
            </div>
          </div>
      </div>

      

    </div>
</div>
  <div class="col-md-1"></div>
  <div class="col-md-1"></div>
</div>      

      

    </div> <!-- /container -->
  </body>

  </html>

