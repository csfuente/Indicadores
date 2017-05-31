<!doctype html>
<head>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="../morris.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
  <script src="lib/example.js"></script>
  <link rel="stylesheet" href="lib/example.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
  <link rel="stylesheet" href="../morris.css">
</head>
<body>
<h1>Decimal DataCTM</h1>

<?php

  $con = mysqli_connect('localhost','memoria_user','123456789','memoria');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

  $query="SELECT tiempo,aceleracion FROM acc WHERE nodo = '07' AND indice <26";
  $result=mysqli_query($con,$query);
  $total_rows = $result->num_rows;
  if($result)
  {
    $rows=mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

?>
<div id="graph"></div>
<script>
 
Morris.Area({
    // ID of the element in which to draw the chart.
    element: 'graph',
 
    // Chart data records -- each entry in this array corresponds to a point
    // on the chart.
    data: <?php echo json_encode($rows);?>,
 
    // The name of the data record attribute that contains x-values.
    xkey: 'tiempo',
 
    // A list of names of data record attributes that contain y-values.
    ykeys: ['aceleracion'],
 
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Images Processed'],
 
    lineColors: ['#0b62a4'],
    xLabels: 'segundos',
 
    // Disables line smoothing
    smooth: true,
    resize: true
});
</script>
</body>
