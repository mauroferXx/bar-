<?php
//configuracion necesaria para acceder a la base de datos
/*
function conn(){
$hostname = "localhost";
$usuariodb = "moteltan_mauro_fer";
$passworddb = "M@uro0753";
$nombredb = "moteltan_registro_restobar";

    //generando la conexion con el servidor 
    $conn = mysqli_connect($hostname, $usuariodb, $passworddb, $nombredb);
    
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}*/

$servername = "localhost";
$username = "moteltan_mauro_fer";
$password = "M@uro0753";
$dbname = "moteltan_registro_restobar";

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$numero=$_POST['numero'];
$fecha=date("Y-m-d");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clientes (nombre, email, numero, fecha)
VALUES ('$nombre','$email','$numero','$fecha')";

if ($conn->query($sql) === TRUE) {
  header('location: https://drive.google.com/file/d/1-iVXB652wLpMua0JRYNSbbev2hHs4_AS/view');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>