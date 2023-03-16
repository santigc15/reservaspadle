<!DOCTYPE html>
<html>

<head>
  <title>PaddlePRO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.php"><img src="./assets/img/logo.png" alt="Logo de la empresa"></a>
    </div>
  </header>

  <body>

    <section class="fondo">
      <div class="overlay">

        <form action="valida.php" method="post" class="login-form">
          <h2>Iniciar sesión</h2>
          <div class="form-group">
            <label for="email">Usuario:</label>
            <input type="text" id="email" name="email" required placeholder="Introduzca su email...">
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required placeholder="Introduzca su contraseña...">
          </div>
          <button type="submit" name="login" value="Login">Iniciar sesión</button>
        </form>


      </div>
    </section>


  </body>

</html>