<?php require_once 'header.php'; ?>

<div class="form-container">
      <form action="valida.php" method="post">
        <label for="user">Usuario:</label>
        <input type="text" name="email" required placeholder="Introduzca su email...">
        <label for="password">Contraseña:</label>
        <input type="password" name="contrasena" required placeholder="Introduzca su contraseña..."> 
        <input type="submit" name="login" value="Login">
      </form>
    </div>


</body>

</html>