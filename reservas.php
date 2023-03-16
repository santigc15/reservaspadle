<?php
if (isset($_GET["id"])){
  var_dump($_GET);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PadelPro</title>
</head>
<body>
  
<form action="reservas.php" method="POST">
  <label for="fecha">Selecciona la fecha</label>
  <input type="date" name="fecha" id="fecha">
  <input type="text" name="nombresocio" id="">
  <label for="turno">Turno1</label>
  <input type="checkbox" name="turno" value="turno1">
  <label for="turno">Turno2</label>
  <input type="checkbox" name="turno" value="turno2">
  <label for="turno">Turno3</label>
  <input type="checkbox" name="turno" value="turno3">
  <label for="turno">Turno4</label>
  <input type="checkbox" name="turno" value="turno4">
  <label for="turno">Turno5</label>
  <input type="checkbox" name="turno" value="turno5">
  <label for="turno">Turno6</label>
  <input type="checkbox" name="turno" value="turno6">
  <input type="submit" value="enviar">
</form>
</body>

