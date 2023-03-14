<?php


if (isset($_POST['register'])) {
    require_once("database.php");


    $datos = array();

    $datos["nombre"] = $_POST['nombre'];
    $datos["email"] = $_POST['email'];
    $datos["telefono"] = $_POST['telefono'];
    $datos["contrasena"] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $database = new Database();
    $dbh = $database->dbh;

    $database->insertUser($dbh, $datos);
    header('Location: login.php');
} else {
    require_once("register.php");
}
?>
