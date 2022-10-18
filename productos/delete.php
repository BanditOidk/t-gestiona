<?php

include("../config.php");

$id_producto=$_GET['id'];

$sql="DELETE FROM productos  WHERE id_producto='$id_producto'";
$query=mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('Eliminado con exito') </script>";
    echo "<script>setTimeout(\"location.href='productos.php'\",1000)</script>";
}else{
    echo "<script>alert('Error al Eliminar') </script>";
    echo "<script>setTimeout(\"location.href='productos.php'\",1000)</script>";
}
?>
