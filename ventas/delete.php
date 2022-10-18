<?php

include("../config.php");

$id_venta=$_GET['id'];

$sql="DELETE FROM ventas  WHERE id_venta='$id_venta'";
$query=mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('Eliminado con exito') </script>";
    echo "<script>setTimeout(\"location.href='ventas.php'\",1000)</script>";
}else{
    echo "<script>alert('Error al Eliminar') </script>";
    echo "<script>setTimeout(\"location.href='ventas.php'\",1000)</script>";
}
?>
