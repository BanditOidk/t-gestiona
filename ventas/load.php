<?php
/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: Marco Robles
* Team: Códigos de Programación
*/


require '../config.php';

/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['id_venta', 'nombre_cliente', 'descripcion', 'total', 'total', 'fecha'];

/* Nombre de la tabla */
$table = "ventas";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;


/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


/* Consulta */
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;


/* Mostrado resultados */
$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['id_venta'] . '</td>';
        $html .= '<td>' . $row['nombre_cliente'] . '</td>';
        $html .= '<td>' . $row['descripcion'] . '</td>';
        $html .= '<td>' . $row['total'] . '</td>';
        $html .= '<td>' . $row['fecha'] . '</td>';
        $html .= '<td>' . '<a href="editar.php?id='.$row['id_venta'].'">Editar'.'</a></td>';
        $html .= '<td>' . '<a href="delete.php?id='.$row['id_venta'].'">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
