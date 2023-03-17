<?php
$id_pista = $_POST['id_pista'];
$fecha = $_POST['fecha'];

// Conexión a la base de datos con PDO
$host = 'localhost';
$dbname = 'basedatos';
$usuario = 'usuario';
$password = 'contraseña';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$opciones = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $conexion = new PDO($dsn, $usuario, $password, $opciones);
} catch (PDOException $e) {
  die("Error al conectar a la base de datos: " . $e->getMessage());
}

// Consulta MySQL con PDO
$sql = "SELECT id
        FROM turnos
        WHERE id NOT IN (
          SELECT turno
          FROM reservas
          WHERE id_pista = ? AND fecha = ?
        )";

$statement = $conexion->prepare($sql);
$statement->execute([$id_pista, $fecha]);

// Recorrer los resultados y mostrar los id
while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
  echo $fila['id'] . "<br>";
}

// Cerrar la conexión a la base de datos
$conexion = null;
?>
