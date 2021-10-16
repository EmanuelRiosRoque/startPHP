<?php include 'includes/header.php';

// in_array -- Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

// Revisar que un elemento existe dentro de un arreglo
var_dump( in_array('Tablet', $carrito) );
var_dump( in_array('Audifonos', $carrito) );

// Ordenar elementos de un arrglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); // De menor a mayor 
rsort($numeros); // De mayo a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar areglo asociativo
$cliente = array(
    'saldo'  => 200,
    'tipo'   => 'Premium',
    'nombre' => 'Emanuel'
);


echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // Ordena por valores (Orden alfabetico)
ksort($cliente); // Ordena por llaves (Orden alfabetico)
krsort($cliente); // Ordena por llaves (Orden alfabetico de la Z a la A)
krsort($cliente); // Ordena por llaves (Z primero)


echo "<pre>";
var_dump($cliente);
echo "</pre>";






include 'includes/footer.php';