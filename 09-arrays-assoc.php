<?php include 'includes/header.php';

$cliente = [
    'nombre'      => 'Emanuel',
    'saldo'       => 200,
    'informacion' => [
        'tipo'    => 'Premium',
        'disponible' => 100
    ] 
];

echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";

// Accerder a la informacion
echo $cliente['nombre'];
echo "<br>";

// Accerder a un arreglo dentro de un arreglo
echo $cliente['informacion']['disponible'];
echo "<br>";

// Agragar Nuevas propiedades 
$cliente['codigo'] = 13516841354;

echo "<pre>";
var_dump($cliente);
echo "</pre>";
// Se agrega por si solo el nuevo arreglo

include 'includes/footer.php';