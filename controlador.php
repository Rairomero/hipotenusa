<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CALCULO DEL AREA DEL RECTANGULO</title>
</head>
<body>
<?php

if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
  $base   = $_POST['base'];
  $altura = $_POST['altura'];
  $area   = null;
  if(!empty($base) or !empty($altura)) {
      echo "<h2 align='center'>CALCULO DEL AREA DEL RECTANGULO</h2>";
      
      $area = $base * $altura;

      echo "<br>Base: " . $base;
      echo "<br>Altura: " . $altura;
      echo "<br/><br/>";
      echo "<br>Area del Rectangulo: " . $area;
      echo "<br/><br/>";
      echo "<a href='datos.html'>Regresar</a>";
  }
}
?>
</body>
</html>