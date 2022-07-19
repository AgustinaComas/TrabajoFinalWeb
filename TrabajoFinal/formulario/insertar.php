<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$DNI=$_POST['DNI'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO usuarios VALUES('$id','$DNI','$nombre','$apellido','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>