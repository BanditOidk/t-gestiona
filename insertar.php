<?php

include("config.php");

$id_venta=$_POST['id_venta'];
$nombre_cliente=$_POST['nombre_cliente'];
$descripcion=$_POST['descripcion'];
$total=$_POST['total'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO ventas VALUES('$id_venta','$nombre_cliente','$descripcion','$total','$fecha')";
$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>