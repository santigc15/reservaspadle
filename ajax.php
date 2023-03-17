<?php
require_once("database.php");
$database = new Database();
$dbh = $database->dbh;

$idpista=$_GET["pista"];
$fecha=$_GET["fecha"];
$sql = "SELECT *
        FROM turnos
        WHERE id NOT IN (
          SELECT turno
          FROM reservas
          WHERE id_pista = ? AND fecha = ?
        )";
$statement = $dbh->prepare($sql);
$statement->execute([$idpista, $fecha]);
$turnos_disponibles = array();
while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
  $turnos_disponibles[] = $fila;
}

echo json_encode($turnos_disponibles);



?>