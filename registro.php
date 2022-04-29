<?php
include_once('con_db.php');
//recibo datos del formulario

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$numero=$_POST['numero'];
$fecha=date("Y-m-d");

echo('\n'.$nombre.'\n');
echo($email.'\n');
echo($numero.'\n');
echo($fecha.'\n');
//insertar datos en la base de datos

    $conectar=conn();
  /*  $sql="INSERT INTO clientes (nombre,email,numero,fecha) VALUES ('$nombre','$email','$numero','$fecha')";
    $resultado=mysqli_query($conectar,$sql); //or trigger_error("query failed! SQL: $sql - Error: ".mysqli_error($conectar), E_USER_ERROR);
if($resultado){
    echo "Datos insertados";
}
else{
    echo "Error al insertar los datos";
}
*/
echo("Proceso terminado");