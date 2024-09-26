<?php
include("bd.php");
include("funciones.php");

$fechainicial = isset($_GET['fechainicial']) ? $_GET['fechainicial'] : date('Y-m-d', strtotime('-30 days'));
$fechafinal = isset($_GET['fechafinal']) ? $_GET['fechafinal'] : date('Y-m-d');

// Obtener los datos actualizados de ventas y productos vendidos
$datosVentas = obtenerDatosVentas($bd, $fechainicial, $fechafinal);
$datosProductos = obtenerDatosProductosVendidos($bd, $fechainicial, $fechafinal);

// Crear un array con los datos
$response = [
    'etiquetasVentas' => $datosVentas['etiquetas'],
    'datosVentas' => $datosVentas['datos'],
    'nombresProductos' => $datosProductos['nombres'],
    'totalesProductos' => $datosProductos['totales']
];

// Devolver la respuesta en formato JSON
echo json_encode($response);
?>
