<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM usuarios";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA WEB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-4">
            <h1>Ingrese sus datos</h1>
            <form action="insertar.php" method="POST">
                <input type="text" required class="form-control mb-3" name="DNI" placeholder="Inserte su DNI">
                <input type="text" required class="form-control mb-3" name="nombre" placeholder="Inserte su nombre">
                <input type="text" required class="form-control mb-3" name="apellido" placeholder="Insserte su apellido">

                <input type="submit" class="btn btn-primary">

</div>
        <div class="col-md-7">
            <h1>Tabla de datos</h1>
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Id</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th></th>
                        <th></th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
        <th><?php echo $row['id']?></th>
        <th><?php echo $row['DNI']?></th>
        <th><?php echo $row['nombre']?></th>
        <th><?php echo $row['apellido']?></th>
        <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
     <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                     
</tr>
<?php
}
?>
</tbody>
</table>


</div>
</div>
</div>

</body>
</html>    


