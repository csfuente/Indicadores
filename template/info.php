<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mapa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 

    <script src="js/jquery.js"></script>

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
            <li class="active"><a href="mapa.php">Mapa</a></li>
            <li><a href="info.php">Info</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->

<script type="text/javascript">
function showSantiago() {
   document.getElementById('info_santiago').style.display = "block";
   document.getElementById('info_concepcion').style.display = "none";
   document.getElementById('info_serena').style.display = "none";
   document.getElementById('info_temuco').style.display = "none";
   document.getElementById('info_copiapo').style.display = "none";
   document.getElementById('info_valdivia').style.display = "none";
}
function showConcepcion() {
    document.getElementById('info_santiago').style.display = "none";
   document.getElementById('info_concepcion').style.display = "block";
   document.getElementById('info_serena').style.display = "none";
   document.getElementById('info_temuco').style.display = "none";
   document.getElementById('info_copiapo').style.display = "none";
   document.getElementById('info_valdivia').style.display = "none";
}

function showSerena() {
   document.getElementById('info_santiago').style.display = "none";
   document.getElementById('info_concepcion').style.display = "none";
   document.getElementById('info_serena').style.display = "block";
   document.getElementById('info_temuco').style.display = "none";
   document.getElementById('info_copiapo').style.display = "none";
   document.getElementById('info_valdivia').style.display = "none";
}

function showTemuco() {
   document.getElementById('info_santiago').style.display = "none";
   document.getElementById('info_concepcion').style.display = "none";
   document.getElementById('info_serena').style.display = "none";
   document.getElementById('info_temuco').style.display = "block";
   document.getElementById('info_copiapo').style.display = "none";
   document.getElementById('info_valdivia').style.display = "none";
}

function showCopiapo() {
   document.getElementById('info_santiago').style.display = "none";
   document.getElementById('info_concepcion').style.display = "none";
   document.getElementById('info_serena').style.display = "none";
   document.getElementById('info_temuco').style.display = "none";
   document.getElementById('info_copiapo').style.display = "block";
   document.getElementById('info_valdivia').style.display = "none";
}

function showValdivia() {
   document.getElementById('info_santiago').style.display = "none";
   document.getElementById('info_concepcion').style.display = "none";
   document.getElementById('info_serena').style.display = "none";
   document.getElementById('info_temuco').style.display = "none";
   document.getElementById('info_copiapo').style.display = "none";
   document.getElementById('info_valdivia').style.display = "block";
}

</script>
      
<div class="container" style="padding:54px;">
    
    <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-1"></div>
  <div class="col-md-8">
      <button type="button" class="btn btn-default" name="answer" value="Show Div" onclick="showSantiago()" />Santiago</button>
      <button type="button" class="btn btn-primary" name="answer2" value="Show Div" onclick="showSerena()" />La Serena</button>
      <button type="button" class="btn btn-success" name="answer3" value="Show Div" onclick="showConcepcion()" />Concepci&oacute;n</button>
      <button type="button" class="btn btn-info" name="answer4" value="Show Div" onclick="showTemuco()" />Temuco</button>
      <button type="button" class="btn btn-warning" name="answer5" value="Show Div" onclick="showCopiapo()" />Copiapo</button>
      <button type="button" class="btn btn-danger" name="answer6" value="Show Div" onclick="showValdivia()" />Valdivia</button>

      <div id="info_santiago"  style="display:none;" class="answer_list" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">Santiago</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="images/santiago.jpg" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> </br>
                      <strong>Habitantes:</strong> </br>
                      <strong>Tipo Clima:</strong> oeee</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              

              <h1>Contaminaci&oacute;n</h1>
              <table class="table">
            <thead>
              <tr>
                <th>Calidad del Aire</th>
                <th>40/100</th>
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

              <table class="table">
            <thead>
              <tr>
                <th>Contaminaci&oacute;n Ac&uacute;stica</th>
                <th>50/100</th>
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>10/100</td>
                <td>Valdivia</td>
              </tr>
              <tr>
                <td>Peor Valor</td>
                <td>90/100</td>
                <td>Santiago</td>
              </tr>
            </tbody>
          </table>
              
            </div>
          </div>
      </div>

      <div id="info_concepcion"  style="display:none;" class="answer_list" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">Concepci&oacute;n</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="images/concepcion.jpg" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> </br>
                      <strong>Habitantes:</strong> </br>
                      <strong>Tipo Clima:</strong> oeee</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              

              <h1>Contaminaci&oacute;n</h1>
              <table class="table">
            <thead>
              <tr>
                <th>Calidad del Aire</th>
                <th>40/100</th>
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

              <table class="table">
            <thead>
              <tr>
                <th>Contaminaci&oacute;n Ac&uacute;stica</th>
                <th>50/100</th>
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>10/100</td>
                <td>Valdivia</td>
              </tr>
              <tr>
                <td>Peor Valor</td>
                <td>90/100</td>
                <td>Santiago</td>
              </tr>
            </tbody>
          </table>
              
            </div>
          </div>
      </div>

      <div id="info_serena"  style="display:none;" class="answer_list" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">La Serena</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="images/serena.jpg" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> </br>
                      <strong>Habitantes:</strong> </br>
                      <strong>Tipo Clima:</strong> oeee</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              

              <h1>Contaminaci&oacute;n</h1>
              <table class="table">
            <thead>
              <tr>
                <th>Calidad del Aire</th>
                <th>40/100</th>
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

              <table class="table">
            <thead>
              <tr>
                <th>Contaminaci&oacute;n Ac&uacute;stica</th>
                <th>50/100</th>
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>10/100</td>
                <td>Valdivia</td>
              </tr>
              <tr>
                <td>Peor Valor</td>
                <td>90/100</td>
                <td>Santiago</td>
              </tr>
            </tbody>
          </table>
              
            </div>
          </div>
      </div>

      <div id="info_temuco"  style="display:none;" class="answer_list" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">Temuco</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="images/temuco.jpg" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> </br>
                      <strong>Habitantes:</strong> </br>
                      <strong>Tipo Clima:</strong> oeee</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              

              <h1>Contaminaci&oacute;n</h1>
              <table class="table">
            <thead>
              <tr>
                <th>Calidad del Aire</th>
                <th>40/100</th>
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

              <table class="table">
            <thead>
              <tr>
                <th>Contaminaci&oacute;n Ac&uacute;stica</th>
                <th>50/100</th>
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>10/100</td>
                <td>Valdivia</td>
              </tr>
              <tr>
                <td>Peor Valor</td>
                <td>90/100</td>
                <td>Santiago</td>
              </tr>
            </tbody>
          </table>
              
            </div>
          </div>
      </div>   

      <div id="info_copiapo"  style="display:none;" class="answer_list" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">Copiapo</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="images/copiapo.jpg" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> </br>
                      <strong>Habitantes:</strong> </br>
                      <strong>Tipo Clima:</strong> oeee</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              

              <h1>Contaminaci&oacute;n</h1>
              <table class="table">
            <thead>
              <tr>
                <th>Calidad del Aire</th>
                <th>40/100</th>
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

              <table class="table">
            <thead>
              <tr>
                <th>Contaminaci&oacute;n Ac&uacute;stica</th>
                <th>50/100</th>
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>10/100</td>
                <td>Valdivia</td>
              </tr>
              <tr>
                <td>Peor Valor</td>
                <td>90/100</td>
                <td>Santiago</td>
              </tr>
            </tbody>
          </table>
              
            </div>
          </div>
      </div>   

      <div id="info_valdivia"  style="display:none;" class="answer_list" > 

        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-heading">
              <h3 class="panel-title">Valdivia</h3>
            </div>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td><img src="images/valdivia.jpg" alt="Smiley face" height="200" width="200"></td>  
                    <td style="padding-left:40px;">
                      <strong>Nombre:</strong> </br>
                      <strong>Habitantes:</strong> </br>
                      <strong>Tipo Clima:</strong> oeee</br>
                    </td>  
                  </tr>
                </tbody>
              </table>
              

              <h1>Contaminaci&oacute;n</h1>
              <table class="table">
            <thead>
              <tr>
                <th>Calidad del Aire</th>
                <th>40/100</th>
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

              <table class="table">
            <thead>
              <tr>
                <th>Contaminaci&oacute;n Ac&uacute;stica</th>
                <th>50/100</th>
                <th>Comuna</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mejor Valor</td>
                <td>10/100</td>
                <td>Valdivia</td>
              </tr>
              <tr>
                <td>Peor Valor</td>
                <td>90/100</td>
                <td>Santiago</td>
              </tr>
            </tbody>
          </table>
              
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

