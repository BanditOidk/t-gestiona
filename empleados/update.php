<?php

include("../config.php");

$no_emp=$_POST['no_emp'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$fecha_ingreso=$_POST['fecha_ingreso'];

$sql="UPDATE empleados SET  fecha_nacimiento='$fecha_nacimiento',nombre='$nombre',apellido='$apellido',genero='$genero',fecha_ingreso='$fecha_ingreso' WHERE no_emp='$no_emp'";
$query=mysqli_query($conn,$sql);

    if($query){
        echo "<script>alert('Actualizado con Exito') </script>";
        echo "<script>setTimeout(\"location.href='empleados.php'\",1000)</script>";
    }else{
        echo "<script>alert('Error al actualizar') </script>";
        echo "<script>setTimeout(\"location.href='empleados.php'\",1000)</script>";
    }
?>