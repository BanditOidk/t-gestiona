<?php 
    include("../config.php");

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE no_emp='$id'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilos.css?<?=date('Y-m-d H:i:s')?>">
        <title>EDITAR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <header>
    <div class="container">
        <img src="../img/logo.png" id="logo">
        <nav>
            <a href="../index.php">Inicio</a>
            <a href="#">Productos</a>
            <a href="empleados.php">Empleados</a>
            <a href="#">Ventas</a>
        </nav>

    </div>

</header>
<br><br><br><br><br><br><br><br><br><br>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="no_emp" value="<?php echo $row['no_emp']  ?>">
                                
                                <input type="date" class="form-control mb-3" name="fecha_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['fecha_nacimiento']  ?>">

                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">

                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">

                                <input type="text" class="form-control mb-3" name="genero" placeholder="Genero" value="<?php echo $row['genero']  ?>">

                                <input type="date" class="form-control mb-3" name="fecha_ingreso" placeholder="Fecha de Ingreso" value="<?php echo $row['fecha_ingreso']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>