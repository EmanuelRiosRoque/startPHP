<?php include 'includes/header.php';

$clientes1 = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Emanuel',
    'saldo'  => 200
];

// Empty - Revisa si unarreglo esta vacio
var_dump( empty($clientes1) );
var_dump( empty($clientes3) );
var_dump( empty($clientes2) );

echo "<br>";

// Isset - Revisa si un arreglo esta creada o esta definida 
var_dump( isset($clientes4) );
var_dump( isset($clientes1) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );

// Otros uso de isset es ver si un preopirdad existen dentro de un objeto
var_dump( isset($cliente['nombre']) );
var_dump( isset($cliente['codigo']) );

include 'includes/footer.php';