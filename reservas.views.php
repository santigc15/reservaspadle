<?php
session_start();


$id_pista = $_GET['id'];
if (!isset($_SESSION['nombresesion'])) {

  header("location: login.php");
}else{
  $id_user=$_SESSION["id"];
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>PadelPRO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <script src="./assets/js/reservas.js"></script>
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


        <form action="reservafranja.php" method="post" class="login-form-booking">
          <h2>Reserva de pista</h2>
          <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
          </div>
          <input type="hidden" name="idpista" value="<?php echo $id_pista; ?>" id="idpista">
          <input type="hidden" name="iduser" value="<?php echo $id_user; ?>" id="iduser">
          <div class="form-group">
            <label for="turno">Elige la franja horaria:</label>
            <select name="turno" id="turno" required>
              <option value="">Seleccionar</option>
            </select>
          </div>

          <div class="form-group">
            <label for="jugador1">Jugador 1:</label>
            <input type="text" name="jugador1" required placeholder="Nombre del jugador 1...">
          </div>
          <div class="form-group">
            <label for="jugador2">Jugador 2:</label>
            <input type="text" name="jugador2" required placeholder="Nombre del jugador 2...">
          </div>
          <div class="form-group">
            <label for="jugador3">Jugador 3:</label>
            <input type="text" name="jugador3" required placeholder="Nombre del jugador 3...">
          </div>
          <div class="form-group">
            <label for="jugador4">Jugador 4:</label>
            <input type="text" name="jugador4" required placeholder="Nombre del jugador 4...">
          </div>




          <button type="submit" name="reservar" value="Reservar">Reservar</button>

        </form>










      </div>
    </section>








  </main>
</body>

</html>