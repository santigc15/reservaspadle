<?php



if (isset($_POST['reservar'])) {
    require_once("database.php");


    $datos = array();

    $datos["id_pista"] = $_POST['idpista'];
    $datos["id_usuario"] = $_POST['iduser'];
    $datos["fecha"] = $_POST['fecha'];
    $datos["turno"] = $_POST['turno'];
    $datos["jugador1"] = $_POST['jugador1'];
    $datos["jugador2"] = $_POST['jugador2'];
    $datos["jugador3"] = $_POST['jugador3'];
    $datos["jugador4"] = $_POST['jugador4'];
    $database = new Database();
    $dbh = $database->dbh;

    $database->insertReserva($dbh, $datos);
    header('Location: index.php');
} else {
    require_once("reservar.php");
}



?>