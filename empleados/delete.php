<?php

include("../config.php");

$no_emp=$_GET['id'];

$sql="DELETE FROM empleados  WHERE no_emp='$no_emp'";
$query=mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('Eliminado con exito') </script>";
    echo "<script>setTimeout(\"location.href='empleados.php'\",1000)</script>";
}else{
    echo "<script>alert('Error al Eliminar') </script>";
    echo "<script>setTimeout(\"location.href='empleados.php'\",1000)</script>";
}
?>
