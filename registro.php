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

  <main>

    <section class="fondo">
      <div class="overlay">

        <form action="newuser.php" method="post" class="login-form">
          <h2>Registro de usuario</h2>

          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Introduzca su nombre...">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" required placeholder="Introduzca su email...">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" required placeholder="Introduzca su telefono...">
          </div>
          <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="contrasena" required placeholder="Introduzca una contraseña...">
          </div>
          <button type="submit" name="register" value="Registrar">Registrar</button>
        </form>

      </div>
    </section>
  </main>
</body>

</html>