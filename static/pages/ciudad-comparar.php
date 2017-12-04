<!DOCTYPE html>
<html>
<head>
    
    <title>Ciudades</title>

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

    <!-- tags input-->
    <link href="{% static 'css/bootstrap-tokenfield.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'css/bootstrap-tokenfield.min.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'css/tokenfield-typeahead.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'css/tokenfield-typeahead.min.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'css/bootstrap-tagsinput.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'css/jquery-ui.css' %}" rel="stylesheet" type="text/css">

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

    <script src="{% static 'js/bootstrap-tagsinput.js' %}"></script>
    <script src="{% static 'js/bootstrap-tokenfield.js' %}"></script>
    <script src="{% static 'js/bootstrap-tokenfield.min.js' %}"></script>
    <script src="{% static 'js/typeahead.js' %}"></script>  
    <script src="{% static 'js/jquery-ui.js' %}"></script>    

</head>
<body>

   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar_indicadores navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#002B43;position:fixed;width:100%;">
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
                <a class="navbar-brand" href="/" style=""><p><img src="{% static 'images/globe-4-xxl.png' %}" alt="Mapa" style="width:28px;"> MAPA</p></a>
                <a class="navbar-brand" href="/ciudades" style=""><p><img src="{% static 'images/home-5-xxl.png' %}" alt="Mapa" style="width:28px;"> CIUDADES</p></a>
                <a class="navbar-brand" href="/categoria" style=""><p><img src="{% static 'images/bar-chart-5-xxl.png' %}" alt="Mapa" style="width:28px;"> INDICADORES</p></a>

            </ul>
            <ul class="nav navbar-top-links navbar-right" style="font-family: 'open-sans condensed bold';">
                <a class="navbar-brand" href="/nosotros" style=""><p><img src="{% static 'images/person.png' %}" alt="" style="width:25px;"> NOSOTROS</p></a>
            </ul>
            <!-- /.navbar-top-links -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>         
<div id="page-wrapper" style="margin:0;">

            <div class="row" style="padding-top:50px;">
                <div class="col-xs-12 col-md-12 col-lg-12">

<p style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color:rgb(19, 161, 241);color:#ffffff;text-align: center;">Elija 2 ciudades para comparar</p>

                 <form method="get" action="/comparar_ciudades/">
                 <div id="custom-search-input" style="margin-bottom:20px;">
                  <div class="input-group col-xs-12 col-md-12 col-lg-12">

                    <div class="col-xs-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="sel1">Seleccione ciudad 1:</label>
                        <select class="form-control" name="ci1">
                            {% for ciudad in ciudades %}
                                <option>{{ciudad}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    </div>
                    <div class="col-xs-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="sel1">Seleccione ciudad 2:</label>
                        <select class="form-control" name="ci2">
                            {% for ciudad in ciudades %}
                                <option>{{ciudad}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    </div>

                    <div class="col-xs-10 col-md-11 col-lg-11" style="margin-top:20px;">
                    <div class="form-group">
                        <input type="text" class="form-control" id="tokenfield" name="tokenfield" value="" />
                        <div id="result" style="display:none;">{{ arreglo }}</div>
                        <script>
                        
                        arreglo=$('#result').html().split(',');
    
                        $('#tokenfield').tokenfield({
                          autocomplete: {
                            source: arreglo,
                            delay: 100
                          },
                          showAutocompleteOnFocus: true
                        })
    
                        </script>
                    </div>
                    </div>
                    <div class="col-xs-2 col-md-1 col-lg-1" style="margin-top:20px;">
                       <span class="input-group-btn">
                        <button class="btn btn-info btn-md" name="submit" type="submit" style="width:100%;">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </span>
                    </div>

                  </div>
                 </div>
                 </form>

                </div>
                <div class="col-xs-12 col-md-12 col-lg-12" id="comparacion">

                    <div class="col-xs-4 col-md-4 col-lg-4">
                    </div>

                    <div class="col-xs-4 col-md-4 col-lg-4">
                        <h2 style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color: rgb(19, 161, 241);color:#ffffff;text-align: center;">{{ciudad1.nombre}}</h2>
                    </div>

                    <div class="col-xs-4 col-md-4 col-lg-4">
                        <h2 style="font-family: 'Open Sans Condensed Bold';font-size: 34px;background-color: rgb(19, 161, 241);color:#ffffff;text-align: center;">{{ciudad2.nombre}}</h2>
                    </div>

                    {% for i, j in zipped %}
                        {% if i|length > 0 %}
                        <div class="col-xs-12 col-md-12 col-lg-12" style="border-style:solid;border-bottom-style:none;border-color:rgb(19, 161, 241);">

                        <div class="col-xs-4 col-md-4 col-lg-4" style="font-size:18px;">
                        {% for dato in i %}
                            {{dato.indicador}}
                        {% endfor %}
                        </div>

                        <div class="col-xs-4 col-md-4 col-lg-4">
                        {% for dato in i %}
                            <p style="text-align:center;">{{dato.var_float}}</p>
                        {% endfor %}
                        </div>

                        <div class="col-xs-4 col-md-4 col-lg-4">
                        {% for dato in j %}
                            <p style="text-align:center;">{{dato.var_float}}</p>
                        {% endfor %}
                        </div>

                        </div>
                        {% endif %}
                    {% endfor %}
                    

                </div>
        </div>       
</div>
</body>
</html>
