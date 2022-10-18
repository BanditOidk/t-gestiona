
<?php 
    include("config.php");


    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inicio</title>
</head>
<?php include "templates/header.php"; ?>
<br> <br> <br><br> <br> <br><br> <br> <br>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Nueva Venta</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Cliente">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="total" placeholder="Total">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No Venta</th>
                                        <th>Cliente</th>
                                        <th>Descripcion</th>
                                        <th>Total</th>
                                        <th>Fecha</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_venta']?></th>
                                                <th><?php  echo $row['nombre_cliente']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th>s/.<?php  echo $row['total']?></th>    
                                                <th><?php  echo $row['fecha']?></th>    
                                                                                    
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
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>