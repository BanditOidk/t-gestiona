<?php 
    include("../config.php");

$id=$_GET['id'];

$sql="SELECT * FROM ventas WHERE id_venta='$id'";
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
            <a href="../productos/productos.php">Productos</a>
            <a href="../empleados/empleados.php">Empleados</a>
            <a href="ventas.php">Ventas</a>
        </nav>

    </div>

</header>
<br><br><br><br><br><br><br><br><br><br>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_venta" value="<?php echo $row['id_venta']  ?>">
                                

                                <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Nombre de Cliente" value="<?php echo $row['nombre_cliente']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion De Compra" value="<?php echo $row['descripcion']  ?>">

                                <input type="text" class="form-control mb-3" name="total" placeholder="Total" value="<?php echo $row['total']  ?>">

                                <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha de Compra" value="<?php echo $row['fecha']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>