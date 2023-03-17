<?php
$id_pista = $_GET['id_pista'];
$fecha = $_GET['fecha'];

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

// Almacenar los resultados en un array
$turnos_disponibles = array();
while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
  $turnos_disponibles[] = $fila['id'];
}

// Devolver los resultados como un array en formato JSON
echo json_encode($turnos_disponibles);

// Cerrar la conexión a la base de datos
$conexion = null;
?>

