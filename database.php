<?php
require_once("config.php");
//clase para crear la conexion bbdd
class Database
{

    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;


    public $dbh;
    private $stmt;
    private $error;
    public $datos;


    public $nombre;
    public $email;
    public $telefono;
    public $contrasena;




    public $id_pista;
    public $id_usuario;
    public $fecha;
    public $turno;

    public $jugador1;
    public $jugador2;
    public $jugador3;
    public $jugador4;





    public function __construct()
    {

        //configurar conexion
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        );
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            $this->dbh->exec('set names utf8');
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }


    public function insertUser($dbh, $datos)
    {
        $this->dbh = $dbh;
        $this->datos = $datos;

        try {
            $stmt = $dbh->prepare("INSERT INTO usuarios (nombre, email, telefono, contrasena) VALUES (:nombre, :email, :telefono, :contrasena)");
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':contrasena', $this->contrasena);

            $this->nombre = $this->datos['nombre'];
            $this->email = $this->datos['email'];
            $this->telefono = $this->datos['telefono'];
            $this->contrasena = $this->datos['contrasena'];

            // Ejecutar la consulta
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al insertar datos: " . $e->getMessage();
        }
    }




    public function compruebaUser($dbh, $usuario, $contrasena)
    {

        // Consulta preparada para verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE email = :usuario";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(['usuario' => $usuario]);

        // Verificar si se encontró el usuario en la base de datos
        if ($stmt->rowCount() == 0) {
            echo "Usuario o contraseña incorrectas";
            header("Location:login.php");
            die();
        }

        $usuario = $stmt->fetch();



        if (password_verify($contrasena, $usuario['contrasena'])) {
            
            $nombre_sesion = $usuario['email'];
            session_name($nombre_sesion);
            session_start();
            return $nombre_sesion;
        } else {
            echo "Usuario o contraseña incorrectas";
            header("Location:login.php");
            die();
        }
    }



    public function insertReserva($dbh, $datos)
    {
        $this->dbh = $dbh;
        $this->datos = $datos;

        try {
            $stmt = $dbh->prepare("INSERT INTO reservas (id_pista, id_usuario, fecha, turno, jugador1, jugador2, jugador3, jugador4) VALUES (:id_pista, :id_usuario, :fecha, :turno, :jugador1, :jugador2, :jugador3, :jugador4)");
            $stmt->bindParam(':id_pista', $this->id_pista);
            $stmt->bindParam(':id_usuario', $this->id_usuario);
            $stmt->bindParam(':fecha', $this->fecha);
            $stmt->bindParam(':turno', $this->turno);
            $stmt->bindParam(':jugador1', $this->jugador1);
            $stmt->bindParam(':jugador2', $this->jugador2);
            $stmt->bindParam(':jugador3', $this->jugador3);
            $stmt->bindParam(':jugador4', $this->jugador4);


            $this->id_pista = $this->datos['id_pista'];
            $this->id_usuario = $this->datos['id_usuario'];
            $this->fecha = $this->datos['fecha'];
            $this->turno = $this->datos['turno'];
            $this->jugador1 = $this->datos['jugador1'];
            $this->jugador2 = $this->datos['jugador2'];
            $this->jugador3 = $this->datos['jugador3'];
            $this->jugador4 = $this->datos['jugador4'];


            // Ejecutar la consulta
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al insertar datos: " . $e->getMessage();
        }
    }
}

?>