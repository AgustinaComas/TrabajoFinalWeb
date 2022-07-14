<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$DNI=$_POST['DNI'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="UPDATE usuarios SET  DNI='$DNI',nombre='$nombre',apellido='$apellido' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>