<?php

include("../config.php");

$id_producto=$_POST['id_producto'];
$nombre=$_POST['nombre'];
$stock=$_POST['stock'];
$precio=$_POST['precio'];


$sql="UPDATE productos SET  nombre='$nombre',stock='$stock',precio='$precio' WHERE id_producto='$id_producto'";
$query=mysqli_query($conn,$sql);

    if($query){
        echo "<script>alert('Actualizado con Exito') </script>";
        echo "<script>setTimeout(\"location.href='productos.php'\",1000)</script>";
    }else{
        echo "<script>alert('Error al actualizar') </script>";
        echo "<script>setTimeout(\"location.href='productos.php'\",1000)</script>";
    }
?>