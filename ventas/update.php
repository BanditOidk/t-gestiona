<?php

include("../config.php");

$id_venta=$_POST['id_venta'];
$nombre_cliente=$_POST['nombre_cliente'];
$descripcion=$_POST['descripcion'];
$total=$_POST['total'];
$fecha=$_POST['fecha'];


$sql="UPDATE ventas SET  nombre_cliente='$nombre_cliente',descripcion='$descripcion',total='$total', fecha='$fecha' WHERE id_venta='$id_venta'";
$query=mysqli_query($conn,$sql);

    if($query){
        echo "<script>alert('Actualizado con Exito') </script>";
        echo "<script>setTimeout(\"location.href='ventas.php'\",1000)</script>";
    }else{
        echo "<script>alert('Error al actualizar') </script>";
        echo "<script>setTimeout(\"location.href='ventas.php'\",1000)</script>";
    }
?>