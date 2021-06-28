<?php
  $hipotenusa = null;
  if(isset($_POST['base']) && isset($_POST['altura'])) {
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $hipotenusa = null;
    if(!empty($base) or !empty($altura)) {
      $hipotenusa = hypot($altura, $base);
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hipotenusa</title>
</head>
<body>
  <h1>Hipotenusa</h1>
  <form method="post">
    <label for="altura">Altura: </label>
    <input type="text" name="altura">
    <label for="base">Base: </label>
    <input type="text" name="base">
    <input type="submit" name="btn" value="Calcular">
  </form>
  <?php
    if ($hipotenusa != null) {
  ?>
    <h2><?php echo $hipotenusa ?></h2>
  <?php
    }
  ?>
</body>
</html>