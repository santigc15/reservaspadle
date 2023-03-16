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
<header class="cabecera">
  <div class="item1"><img src="./assets/img/logo.png" alt="logo"></div>
  <div class="item2"><img src="./assets/img/imagen1.jpg" alt="logo"></div>

</header>
<body>
  
<div class="form-container">
      <form action="newuser.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required placeholder="Introduzca su nombre...">
        <label for="email">Email:</label>
        <input type="email" name="email" required placeholder="Introduzca su email...">
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required placeholder="Introduzca su telefono...">
        <label>Contraseña:</label>
        <input type="password" name="contrasena" required placeholder="Introduzca una contraseña..."> 
        <input type="submit" name="register" value="Registrar">
      </form>
    </div>


</body>

</html>