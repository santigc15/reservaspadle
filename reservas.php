<?php
if (isset($_POST["fecha"])){
  var_dump($_POST);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reservas.css">
    <title>PadelPro</title>
</head>
<body>
  
<form action="reservas.php" method="POST">
  <label for="fecha">Selecciona la fecha</label>
  <input type="date" name="fecha" id="fecha">
  <input type="submit" value="enviar">
</form>
</body>

