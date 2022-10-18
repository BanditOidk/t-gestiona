<?php
$servidor = "localhost"; // Nombre/IP del servidor
$usuario = "root"; // Nombre de la BBDD
$password = ""; // Nombre del usuario
$db = "almacen"; // Contraseña del usuario
// Creamos la conexión
$conn = mysqli_connect($servidor, $usuario, $password, $db);
// // Comprobamos la conexión
// if (!$conexion) {
//     die("La conexión ha fallado: " . mysqli_connect_error());
// }
// echo "Conexión satisfactoria";

// mysqli_close($conexion);
?>