<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$DNI=$_POST['DNI'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];


$sql="INSERT INTO usuarios VALUES('$id','$DNI','$nombre','$apellido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>