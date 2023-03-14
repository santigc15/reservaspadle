<?php require_once 'header.php'; ?>




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