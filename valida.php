<?php


if (isset($_POST["login"])) {
    require_once("database.php");

    $usuario = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $database = new Database();
    $dbh = $database->dbh;

    $nombre=$database->compruebaUser($dbh, $usuario, $contrasena);


if($nombre){
    session_start();

    $_SESSION["id"]=$nombre['id'];
    $_SESSION["nombresesion"]=$nombre['email'];

    header("Location:index.php");
}


} else {
    header("Location:login.php");
}


?>