<?php
//require_once("valida.php");
$id_pista = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>PaddlePRO</title>
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


      <form action="#" method="post" class="login-form">
      <h2>Reserva de pista</h2>
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha">
      <input type="hidden" name="idpista" value="<?php echo $id_pista; ?>" id="idpista">
      <label for="turno">Elige la franja horaria:</label>
      <select name="turno" id="turno">
        <option value="">Seleccionar</option>
      </select>
    </form>








      </div>
    </section>








  </main>
</body>

</html>


